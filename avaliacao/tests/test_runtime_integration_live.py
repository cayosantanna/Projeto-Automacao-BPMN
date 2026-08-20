"""
Smoke test de integração HTTP/DB em tempo de execução.

Verifica a conectividade HTTP real contra o webhook do n8n (WF06 Fila IA) e a
persistência básica de tabelas no PostgreSQL. Não constitui E2E completo do
GLPI nem validação científica confirmatória.
"""

from __future__ import annotations

import json
import time
import urllib.request
import urllib.error
import pytest
import psycopg2


N8N_WEBHOOK_URL = "http://localhost:5678/webhook/glpi-ticket-fila-ia-v9"
LOCAL_AI_HEALTH_URL = "http://127.0.0.1:8090/health"
LOCAL_AI_TOKEN = "local-ai-projeto-ic-2026-8090-7f4a1c9e"

DB_CONFIG = {
    "host": "localhost",
    "port": 5432,
    "dbname": "triagem",
    "user": "triagem_user",
    "password": "TriagemPass2026!",
}


def test_local_ai_health_real():
    """Verifica se o servidor local_ai está ativo e saudável."""
    import requests

    headers = {
        "Authorization": f"Bearer {LOCAL_AI_TOKEN}",
        "Connection": "close",
    }
    last_exc = None
    for _ in range(5):
        try:
            res = requests.get(LOCAL_AI_HEALTH_URL, headers=headers, timeout=5)
            assert res.status_code == 200
            data = res.json()
            assert data.get("status") == "ok"
            assert data.get("alive") is True
            return
        except Exception as exc:
            last_exc = exc
            time.sleep(1)
    if last_exc:
        raise last_exc


def test_postgresql_connection_real():
    """Verifica se o banco de dados PostgreSQL de triagem está acessível."""
    conn = psycopg2.connect(**DB_CONFIG)
    try:
        with conn.cursor() as cur:
            cur.execute("SELECT 1;")
            result = cur.fetchone()
            assert result == (1,)
    finally:
        conn.close()


def test_e2e_ticket_webhook_to_postgres_real():
    """
    Envia um ticket real de teste para o Webhook do n8n e verifica
    sua persistência e auditoria de IA no banco de dados PostgreSQL.
    """
    test_ticket_id = int(time.time()) % 1000000 + 800000
    ticket_payload = {
        "id": test_ticket_id,
        "name": "Vazamento contínuo sob a pia do laboratório",
        "descricao": "Foi constatado um vazamento de água contínuo na tubulação sob a bancada do lab 102. Necessário reparo hidráulico urgente.",
        "itilcategories_id": "Hidráulica",
        "localizacao": "Bloco Beta - laboratórios básicos",
        "solicitante": "usuario.piloto01",
        "status": 1,
        "urgency": 4,
        "impact": 3,
        "date": "2026-08-18 16:30:00",
        "source": "glpi-plugin-n8nwebhook",
        "event": "ticket.add",
        "webhook_key": "glpi-n8n-ic-2026",
    }

    req = urllib.request.Request(
        N8N_WEBHOOK_URL,
        data=json.dumps(ticket_payload).encode("utf-8"),
        headers={
            "Content-Type": "application/json",
            "x-webhook-key": "glpi-n8n-ic-2026",
        },
        method="POST",
    )

    try:
        with urllib.request.urlopen(req, timeout=10) as response:
            assert response.status in (200, 202), f"Status inesperado: {response.status}"
            raw_body = response.read().decode("utf-8")
            assert len(raw_body) > 0
    except urllib.error.URLError as exc:
        pytest.fail(f"Falha ao conectar com o webhook n8n em {N8N_WEBHOOK_URL}: {exc}")

    # Polling no banco PostgreSQL para verificar o processamento
    conn = psycopg2.connect(**DB_CONFIG)
    processed = False
    max_wait_seconds = 20
    start_time = time.time()

    try:
        with conn.cursor() as cur:
            while time.time() - start_time < max_wait_seconds:
                cur.execute(
                    "SELECT id, triagem_status, classificacao_final FROM tickets_processados WHERE id = %s;",
                    (test_ticket_id,),
                )
                row = cur.fetchone()
                if row is not None:
                    processed = True
                    break
                time.sleep(1)

            assert processed, f"Ticket {test_ticket_id} não foi registrado em tickets_processados após {max_wait_seconds}s"

            # Verificar auditoria em ia_tentativas_modelo
            cur.execute(
                "SELECT provedor_ia, status_tentativa, duracao_ms FROM ia_tentativas_modelo WHERE ticket_id = %s ORDER BY id DESC LIMIT 1;",
                (test_ticket_id,),
            )
            attempt_row = cur.fetchone()
            if attempt_row is not None:
                provedor, status_tentativa, duracao = attempt_row
                assert status_tentativa in ("VALID", "FALLBACK_ACCEPTED", "SKIPPED", "OPERATIONAL_FAILURE")
                assert duracao is not None and duracao >= 0

    finally:
        conn.close()
