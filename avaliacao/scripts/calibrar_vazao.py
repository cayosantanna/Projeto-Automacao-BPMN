from __future__ import annotations

import argparse
import hashlib
import json
import os
import random
import subprocess
import sys
import time
import urllib.request
from concurrent.futures import ThreadPoolExecutor, as_completed
from dataclasses import asdict
from datetime import datetime
from pathlib import Path
from types import SimpleNamespace


ROOT = Path(__file__).resolve().parents[2]
SCRIPT_DIR = Path(__file__).resolve().parent
sys.path.insert(0, str(SCRIPT_DIR))

from project_env import configured_value, load_project_env  # noqa: E402

load_project_env()

import conferir_gabarito as checker  # noqa: E402
import gerar_dataset_avaliacao as dataset  # noqa: E402


def parse_configs(raw: str) -> list[dict]:
    configs: list[dict] = []
    for index, item in enumerate(raw.split(","), start=1):
        try:
            batch_raw, interval_raw = item.strip().split("@", 1)
            batch, interval = int(batch_raw), int(interval_raw)
        except ValueError as exc:
            raise SystemExit(
                f"Configuração inválida {item!r}; use lote@intervalo."
            ) from exc
        if batch <= 0 or interval < 0:
            raise SystemExit(f"Configuração inválida: {item}")
        configs.append(
            {"id": f"Q{index}", "batch": batch, "interval_seconds": interval}
        )
    return configs


def ensure_quiescent_queue() -> None:
    row = checker.query(
        """
        SELECT COUNT(*)::int AS n
        FROM tickets_processados
        WHERE triagem_status IN (
          'PENDENTE_FILA_IA','FILA_IA_LIBERADA','CLASSIFICANDO_DUP',
          'CLASSIFICANDO','AGUARDANDO_FILA_CLASSIFICACAO'
        )
        """
    )[0]
    if row["n"]:
        raise RuntimeError(
            f"A fila não está vazia ({row['n']} tickets). "
            "Calibração controlada exige janela operacional isolada."
        )


def compose_n8n(batch: int, interval: int) -> None:
    env = os.environ.copy()
    env["FILA_IA_LOTE_TAMANHO"] = str(batch)
    env["FILA_IA_INTERVALO_SEGUNDOS"] = str(interval)
    result = subprocess.run(
        [
            "docker",
            "compose",
            "-f",
            str(ROOT / "n8n" / "docker-compose.yml"),
            "up",
            "-d",
            "--force-recreate",
            "n8n",
        ],
        cwd=ROOT / "n8n",
        env=env,
        capture_output=True,
        text=True,
        check=False,
    )
    if result.returncode:
        raise RuntimeError(result.stderr.strip() or "Falha ao reiniciar n8n")
    deadline = time.monotonic() + 120
    while time.monotonic() < deadline:
        try:
            with urllib.request.urlopen("http://localhost:5678/healthz", timeout=5) as response:
                if response.status < 400:
                    return
        except Exception:
            pass
        time.sleep(3)
    raise TimeoutError("n8n não ficou saudável em 120 segundos.")


def calibration_cases(total: int, seed: int) -> list[dataset.EvalCase]:
    if total <= 0:
        raise ValueError("total deve ser maior que zero")

    # O número de cenários de classificação é definido pelo catálogo, não por
    # uma constante. Aumentamos as variações até obter exatamente a amostra
    # declarada pela CLI; isso evita calibrações silenciosamente menores.
    for per_scenario in range(1, total + 1):
        cases = [
            case
            for case in dataset.generate_cases(
                per_scenario,
                seed,
                dataset_version=dataset.DEFAULT_DATASET_VERSION,
                split="CALIBRACAO",
            )
            if case.dimension == "CLASSIFICACAO"
        ]
        if len(cases) >= total:
            return cases[:total]
    raise RuntimeError("O catálogo não produziu casos de classificação suficientes")


def register_experiment(run_id: str, seed: int, config: dict) -> None:
    scientific_config = {
        **config,
        "test_mode": True,
        "auto_human_confirmation": True,
        "label_source": "SYNTHETIC_GENERATOR",
        "scientific_result": False,
        "confirmatory_eligible": False,
        "purpose": "THROUGHPUT_CALIBRATION",
    }
    checker.execute(
        """
        INSERT INTO experimentos_avaliacao(
          run_id,origem,dataset_version,dataset_sha256,seed,split,modelo_ia,
          prompt_dedup_version,prompt_classif_version,generation_profile,
          generation_config,protocolo_version,status,rotulos_validados,iniciado_em
        )
        VALUES(
          %s,%s,%s,%s,%s,'CALIBRACAO','local-hybrid-v1.8.0',
          'deduplicacao_v9.1-episodica','classificacao_v9.1-episodica',
          'local-pytorch-fp32-deterministic',
          %s::jsonb,'calibracao-fila-v2.1.0','CALIBRANDO',FALSE,NOW()
        )
        """,
        (
            run_id,
            f"CALIBRACAO_FILA_{run_id}",
            dataset.DEFAULT_DATASET_VERSION,
            hashlib.sha256(
                json.dumps(config, sort_keys=True).encode()
            ).hexdigest(),
            seed,
            json.dumps(scientific_config),
        ),
    )


def create_cases(
    cases: list[dataset.EvalCase],
    run_id: str,
    ingress_interval: float,
    args: argparse.Namespace,
) -> list[dict]:
    generator_args = SimpleNamespace(
        url=args.url,
        app_token=args.app_token,
        user=args.user,
        password=args.password,
        limite=0,
        intervalo=ingress_interval,
        origem=f"CALIBRACAO_FILA_{run_id}",
        run_id=run_id,
        postgres_container=args.postgres_container,
        postgres_user=args.postgres_user,
        postgres_db=args.postgres_db,
    )
    if args.concorrencia_ingresso <= 1:
        created, _ = dataset.create_tickets_in_glpi(cases, generator_args)
        return created

    seed_module = dataset.load_seed_module()
    setup_client = seed_module.GLPIClient(
        args.url, args.app_token, args.user, args.password
    )
    setup_client.init_session()
    try:
        category_map = seed_module.seed_categorias(setup_client)
        location_map = seed_module.seed_localizacoes(setup_client)
        seed_module.seed_usuarios(setup_client)
        user_map = dataset.build_user_map(seed_module, setup_client)
    finally:
        setup_client.kill_session()

    def create_one(case: dataset.EvalCase) -> dict:
        client = seed_module.GLPIClient(
            args.url, args.app_token, args.user, args.password
        )
        client.init_session()
        try:
            result = client.create_item(
                "Ticket",
                {
                    "name": case.title,
                    "content": case.content,
                    "itilcategories_id": category_map[case.category],
                    "locations_id": location_map[case.location],
                    "type": 1,
                    "status": case.status,
                    "urgency": case.urgency,
                    "impact": case.impact,
                    "_users_id_requester": user_map.get(case.requester, 2),
                },
            )
        finally:
            client.kill_session()
        if not result or "id" not in result:
            raise RuntimeError(f"Falha ao criar {case.case_id}")
        ticket_id = int(result["id"])
        row = {
            "ticket_id": ticket_id,
            "origem": generator_args.origem,
            "cenario_controle": f"{case.scenario_id}:{case.case_id}",
            "duplicado_esperado": case.expected_dedup,
            "referencia_duplicado_esperada": None,
            "classificacao_esperada": case.expected_classification or None,
            "executor_esperado": case.expected_executor or None,
            "status_final_esperado": case.expected_status or None,
            "nivel_dificuldade": case.difficulty,
            "observacao": (
                f"case_id={case.case_id}; episode_id={case.episode_id}; "
                f"concorrencia={args.concorrencia_ingresso}"
            ),
            "run_id": run_id,
            "case_id": case.case_id,
            "episode_id": case.episode_id,
            "scenario_id": case.scenario_id,
            "dimension": case.dimension,
            "order_in_episode": case.order_in_group,
            "reference_case_id": None,
            "requires_human_review": case.requires_human_review,
            "risk": case.risk,
            "rationale": case.rationale,
            "label_source": case.label_source,
            "template_family": case.template_family,
            "dataset_version": case.dataset_version,
            "split": case.split,
        }
        dataset.run_dataset_sql(
            dataset.dataset_sql([row]), generator_args, quiet=True
        )
        return {
            "case_id": case.case_id,
            "ticket_id": ticket_id,
            "title": case.title,
        }

    created: list[dict] = []
    with ThreadPoolExecutor(max_workers=args.concorrencia_ingresso) as pool:
        futures = {pool.submit(create_one, case): case for case in cases}
        for future in as_completed(futures):
            item = future.result()
            created.append(item)
            print(f"[OK] {item['case_id']} -> GLPI #{item['ticket_id']}")
    return sorted(created, key=lambda item: item["case_id"])


def collect_result(run_id: str, warmup: int) -> dict:
    rows = checker.query(
        """
        WITH alvo AS (
          SELECT dc.ticket_id,tp.fila_enfileirada_em,tp.fila_liberar_em,
                 tp.atualizado_em,tp.triagem_status,
                 ROW_NUMBER() OVER (
                   ORDER BY tp.fila_enfileirada_em,tp.id
                 ) AS ordem_ingresso
          FROM dataset_controle dc
          JOIN tickets_processados tp ON tp.id=dc.ticket_id
          WHERE dc.run_id=%s
        ),
        tempos AS (
          SELECT
            a.*,
            (
              SELECT MIN(i.criado_em)
              FROM ia_decisoes i
              WHERE i.ticket_id=a.ticket_id
            ) AS primeira_decisao
          FROM alvo a
        ),
        medidos AS (
          SELECT * FROM tempos WHERE ordem_ingresso > %s
        )
        SELECT
          (SELECT COUNT(*)::int FROM tempos) AS total,
          (SELECT COUNT(*)::int FROM medidos) AS total_medido,
          LEAST(%s,(SELECT COUNT(*)::int FROM tempos)) AS warmup_descartado,
          (SELECT COUNT(*) FILTER (
            WHERE triagem_status IN (
              'ERRO_IA','TRIAGEM_MANUAL','DUPLICADO_FECHADO','ATRIBUIDO_DEMO',
              'PLANEJADO_DEMO_SEM_EQUIPE','ENCAMINHADO_PLANEJADO','FECHADO_OBRA'
            )
          )::int FROM tempos) AS terminal,
          ROUND(AVG(EXTRACT(EPOCH FROM (primeira_decisao-fila_enfileirada_em)))::numeric,3)
            AS espera_ia_media_s,
          ROUND(percentile_cont(0.50) WITHIN GROUP (
            ORDER BY EXTRACT(EPOCH FROM (primeira_decisao-fila_enfileirada_em))
          )::numeric,3) AS espera_ia_p50_s,
          ROUND(percentile_cont(0.95) WITHIN GROUP (
            ORDER BY EXTRACT(EPOCH FROM (primeira_decisao-fila_enfileirada_em))
          )::numeric,3) AS espera_ia_p95_s,
          ROUND(percentile_cont(0.99) WITHIN GROUP (
            ORDER BY EXTRACT(EPOCH FROM (primeira_decisao-fila_enfileirada_em))
          )::numeric,3) AS espera_ia_p99_s,
          ROUND(AVG(EXTRACT(EPOCH FROM (atualizado_em-fila_enfileirada_em)))::numeric,3)
            AS latencia_total_media_s,
          ROUND(percentile_cont(0.50) WITHIN GROUP (
            ORDER BY EXTRACT(EPOCH FROM (atualizado_em-fila_enfileirada_em))
          )::numeric,3) AS latencia_total_p50_s,
          ROUND(percentile_cont(0.95) WITHIN GROUP (
            ORDER BY EXTRACT(EPOCH FROM (atualizado_em-fila_enfileirada_em))
          )::numeric,3) AS latencia_total_p95_s,
          ROUND(percentile_cont(0.99) WITHIN GROUP (
            ORDER BY EXTRACT(EPOCH FROM (atualizado_em-fila_enfileirada_em))
          )::numeric,3) AS latencia_total_p99_s
        FROM medidos
        """,
        (run_id, warmup, warmup),
    )[0]
    quality = checker.query(
        """
        SELECT
          COUNT(*) FILTER (WHERE erro_ia)::int AS erros_ia,
          COUNT(*) FILTER (
            WHERE erro_ia=FALSE AND probabilidades_validas=FALSE
          )::int AS probabilidades_invalidas,
          COUNT(*) FILTER (
            WHERE LOWER(COALESCE(mensagem_erro,'')) ~
              '(quota|rate|429|resource.exhausted|too many)'
          )::int AS rate_limits
        FROM ia_decisoes
        WHERE run_id=%s
        """,
        (run_id,),
    )[0]
    ordering = checker.query(
        """
        WITH x AS (
          SELECT
            fila_liberar_em,
            LAG(fila_liberar_em) OVER (
              ORDER BY fila_enfileirada_em,tp.id
            ) AS anterior
          FROM tickets_processados tp
          JOIN dataset_controle dc ON dc.ticket_id=tp.id
          WHERE dc.run_id=%s
        )
        SELECT COUNT(*) FILTER (
          WHERE anterior IS NOT NULL AND fila_liberar_em < anterior
        )::int AS violacoes_ordem
        FROM x
        """,
        (run_id,),
    )[0]
    result = {**rows, **quality, **ordering}
    result["p99_confirmatorio"] = bool(result.get("total_medido", 0) >= 500)
    result["nota_p99"] = (
        "confirmatório"
        if result["p99_confirmatorio"]
        else "exploratório; requer pelo menos 500 latências medidas por tratamento"
    )
    result["success"] = bool(
        result["total"] > 0
        and result["terminal"] == result["total"]
        and result["erros_ia"] == 0
        and result["probabilidades_invalidas"] == 0
        and result["rate_limits"] == 0
        and result["violacoes_ordem"] == 0
    )
    return result


def write_report(path: Path, payload: dict) -> None:
    lines = [
        "# Calibração repetida da fila WF06",
        "",
        f"- Início: `{payload['started_at']}`",
        f"- Repetições por configuração: `{payload['repetitions']}`",
        f"- Tickets por repetição: `{payload['tickets_per_repetition']}`",
        f"- Warm-up excluído da latência: `{payload['warmup_per_repetition']}`",
        f"- Concorrência de ingresso GLPI: `{payload['ingress_concurrency']}`",
        f"- Configuração aprovada: `{payload.get('selected_config')}`",
        f"- Aprovada: `{'SIM' if payload['approved'] else 'NÃO'}`",
        "",
        "Uma configuração só é aprovada quando todas as repetições terminam sem "
        "erro de IA, rate limit, probabilidade inválida, timeout ou violação de ordem.",
        "",
    ]
    for item in payload["runs"]:
        lines.extend(
            [
                f"## {item['run_id']}",
                "",
                f"- Configuração: lote `{item['batch']}`, intervalo `{item['interval_seconds']}s`",
                f"- Repetição: `{item['repetition']}`",
                f"- Resultado: `{'OK' if item['metrics']['success'] else 'FALHA'}`",
                f"- Métricas: `{json.dumps(item['metrics'], ensure_ascii=False, default=str)}`",
                "",
            ]
        )
    path.write_text("\n".join(lines) + "\n", encoding="utf-8")


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(
        description="Calibração repetida dos parâmetros de liberação do WF06."
    )
    parser.add_argument(
        "--configuracoes",
        default="1@60,2@45,3@30",
        help="Lista lote@intervalo_segundos.",
    )
    parser.add_argument("--repeticoes", type=int, default=3)
    parser.add_argument("--tickets-por-repeticao", type=int, default=12)
    parser.add_argument("--ingress-interval", type=float, default=0.0)
    parser.add_argument(
        "--concorrencia-ingresso",
        type=int,
        default=4,
        help="Número de requisições GLPI simultâneas por repetição.",
    )
    parser.add_argument(
        "--warmup",
        type=int,
        default=2,
        help="Primeiros tickets excluídos somente das métricas de latência.",
    )
    parser.add_argument("--seed", type=int, default=20260702)
    parser.add_argument("--timeout", type=int, default=3600)
    parser.add_argument("--poll", type=int, default=10)
    parser.add_argument("--randomizar-ordem", action="store_true", default=True)
    parser.add_argument("--ordem-fixa", dest="randomizar_ordem", action="store_false")
    parser.add_argument("--saida-dir", default="avaliacao/resultados/calibracao-fila-v2")
    parser.add_argument("--url", default=configured_value("GLPI_URL"))
    parser.add_argument("--app-token", default=configured_value("GLPI_APP_TOKEN"))
    parser.add_argument("--user", default=configured_value("GLPI_USER"))
    parser.add_argument("--password", default=configured_value("GLPI_PASSWORD"))
    parser.add_argument("--postgres-container", default="glpi-dedup-db")
    parser.add_argument("--postgres-user", default="triagem_user")
    parser.add_argument("--postgres-db", default="triagem")
    return parser.parse_args()


def main() -> int:
    args = parse_args()
    for attribute, option in (
        ("url", "--url/GLPI_URL"),
        ("app_token", "--app-token/GLPI_APP_TOKEN"),
        ("user", "--user/GLPI_USER"),
        ("password", "--password/GLPI_PASSWORD"),
    ):
        value = str(getattr(args, attribute, "") or "").strip()
        if not value or value.upper() == "CHANGE_ME":
            raise SystemExit(f"Configuração obrigatória ausente: {option}")
    if args.repeticoes < 3:
        raise SystemExit("Use pelo menos 3 repetições por configuração.")
    if args.concorrencia_ingresso < 1:
        raise SystemExit("--concorrencia-ingresso deve ser >= 1.")
    if args.warmup < 0 or args.warmup >= args.tickets_por_repeticao:
        raise SystemExit("--warmup deve estar entre 0 e tickets-por-repeticao-1.")
    configs = parse_configs(args.configuracoes)
    schedule = [
        {**config, "repetition": repetition}
        for repetition in range(1, args.repeticoes + 1)
        for config in configs
    ]
    if args.randomizar_ordem:
        random.Random(args.seed).shuffle(schedule)
    out_dir = ROOT / args.saida_dir
    out_dir.mkdir(parents=True, exist_ok=True)
    started_at = datetime.now().isoformat(timespec="seconds")
    runs: list[dict] = []
    active_run_id: str | None = None
    ensure_quiescent_queue()
    try:
        for index, item in enumerate(schedule, start=1):
            ensure_quiescent_queue()
            run_id = (
                f"CALQ-{datetime.now().strftime('%Y%m%dT%H%M%S')}-"
                f"{item['id']}-R{item['repetition']}"
            )
            active_run_id = run_id
            print(
                f"[CAL] {index}/{len(schedule)} {run_id}: "
                f"lote={item['batch']} intervalo={item['interval_seconds']}s"
            )
            compose_n8n(item["batch"], item["interval_seconds"])
            # Blocos de mesma repetição usam exatamente a mesma carga em todas
            # as configurações; só lote/intervalo podem explicar a diferença.
            seed = args.seed + item["repetition"]
            cases = calibration_cases(args.tickets_por_repeticao, seed)
            register_experiment(
                run_id,
                seed,
                {
                    **item,
                    "warmup": args.warmup,
                    "ingress_concurrency": args.concorrencia_ingresso,
                    "ingress_interval": args.ingress_interval,
                },
            )
            created = create_cases(cases, run_id, args.ingress_interval, args)
            checker.wait_processing(
                run_id,
                args.timeout,
                args.poll,
                use_oracle=True,
            )
            metrics = collect_result(run_id, args.warmup)
            checker.set_experiment_status(
                run_id, "CONCLUIDO" if metrics["success"] else "FALHOU"
            )
            active_run_id = None
            run_payload = {
                **item,
                "run_id": run_id,
                "tickets": created,
                "metrics": metrics,
            }
            runs.append(run_payload)
            (out_dir / f"{run_id}.json").write_text(
                json.dumps(run_payload, ensure_ascii=False, indent=2, default=str) + "\n",
                encoding="utf-8",
            )
    except Exception:
        if active_run_id:
            checker.set_experiment_status(active_run_id, "FALHOU")
        raise
    finally:
        # Restaura o perfil operacional documentado mesmo após falha de uma repetição.
        try:
            compose_n8n(3, 45)
        except Exception as exc:
            print(f"[AVISO] Não foi possível restaurar lote=3/intervalo=45: {exc}")

    safe: list[dict] = []
    for config in configs:
        group = [
            item
            for item in runs
            if item["batch"] == config["batch"]
            and item["interval_seconds"] == config["interval_seconds"]
        ]
        if len(group) == args.repeticoes and all(item["metrics"]["success"] for item in group):
            safe.append(config)
    selected = min(
        safe,
        key=lambda item: (item["interval_seconds"], -item["batch"]),
        default=None,
    )
    payload = {
        "protocol_version": "calibracao-fila-v2.0.0",
        "started_at": started_at,
        "finished_at": datetime.now().isoformat(timespec="seconds"),
        "repetitions": args.repeticoes,
        "tickets_per_repetition": args.tickets_por_repeticao,
        "warmup_per_repetition": args.warmup,
        "ingress_concurrency": args.concorrencia_ingresso,
        "randomized_order": args.randomizar_ordem,
        "approved": selected is not None,
        "selected_config": selected,
        "runs": runs,
    }
    approved_path = out_dir / "calibracao_aprovada.json"
    approved_path.write_text(
        json.dumps(payload, ensure_ascii=False, indent=2, default=str) + "\n",
        encoding="utf-8",
    )
    write_report(out_dir / "relatorio.md", payload)
    print(f"[OK] Resultado: {approved_path}")
    return 0 if selected else 2


if __name__ == "__main__":
    raise SystemExit(main())
