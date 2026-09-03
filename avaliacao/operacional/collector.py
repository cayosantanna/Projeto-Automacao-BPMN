from __future__ import annotations

import argparse
from contextlib import contextmanager
import json
import os
import sys
from datetime import datetime, timezone
from pathlib import Path
from typing import Any, Mapping

import psycopg2
from psycopg2.extras import RealDictCursor

PROJECT_ROOT = Path(__file__).resolve().parents[2]
if str(PROJECT_ROOT) not in sys.path:
    sys.path.insert(0, str(PROJECT_ROOT))

from avaliacao.operacional.core import (
    ROOT,
    collect_live_point_in_time,
    evaluate_drift,
    evaluate_slo,
    load_policy,
    percentile,
    project_env,
    sha256_file,
    snapshot_from_rows,
    utc_now,
)


DEFAULT_RUNTIME_DIR = ROOT / "avaliacao" / "runtime" / "monitoring"
def build_parser() -> argparse.ArgumentParser:
    parser = argparse.ArgumentParser(description="Coleta pontual e cumulativa de SLO/drift do projeto IC")
    parser.add_argument("--runtime-dir", type=Path, default=DEFAULT_RUNTIME_DIR)
    parser.add_argument("--policy", type=Path, default=None)
    return parser


def _parse_timestamp(value: str) -> datetime:
    return datetime.fromisoformat(value.replace("Z", "+00:00")).astimezone(timezone.utc)


def _database_observation(env: Mapping[str, str]) -> dict[str, Any]:
    started = datetime.now(timezone.utc)
    connection = psycopg2.connect(
        host=env.get("POSTGRES_HOST", "127.0.0.1"),
        port=int(env.get("POSTGRES_PORT", "5432")),
        dbname=env.get("POSTGRES_DB", "triagem"),
        user=env.get("POSTGRES_RUNTIME_USER", "triagem_app"),
        password=env.get("POSTGRES_RUNTIME_PASSWORD", ""),
        connect_timeout=3,
        application_name="projeto_ic_monitoring_collector",
    )
    try:
        connection.set_session(readonly=True, autocommit=True)
        with connection.cursor(cursor_factory=RealDictCursor) as cursor:
            cursor.execute(
                """
                SELECT
                    COUNT(*) FILTER (WHERE criado_em >= NOW() - INTERVAL '30 days') AS decisoes_30d,
                    COUNT(*) FILTER (WHERE criado_em >= NOW() - INTERVAL '30 days' AND erro_ia) AS erros_30d,
                    percentile_cont(0.95) WITHIN GROUP (ORDER BY tempo_resposta_ms)
                        FILTER (WHERE criado_em >= NOW() - INTERVAL '30 days' AND tempo_resposta_ms IS NOT NULL)
                        AS inferencia_p95_ms
                FROM ia_decisoes
                """
            )
            decision_metrics = dict(cursor.fetchone() or {})
            cursor.execute("SELECT COUNT(*) AS total FROM fila_ia_dead_letter WHERE NOT resolvido")
            open_dlq = int((cursor.fetchone() or {}).get("total") or 0)
            cursor.execute(
                """
                SELECT percentile_cont(0.95) WITHIN GROUP (ORDER BY espera_p95_segundos) AS espera_p95
                FROM fila_ia_metricas
                WHERE criado_em >= NOW() - INTERVAL '30 days'
                """
            )
            queue_wait = (cursor.fetchone() or {}).get("espera_p95")
            cursor.execute(
                """
                SELECT predicao, etapa, confianca, erro_ia
                FROM ia_decisoes
                ORDER BY criado_em DESC, id DESC
                LIMIT 400
                """
            )
            decision_rows = [dict(row) for row in cursor.fetchall()]
    finally:
        connection.close()

    elapsed_ms = (datetime.now(timezone.utc) - started).total_seconds() * 1000.0
    total = int(decision_metrics.get("decisoes_30d") or 0)
    errors = int(decision_metrics.get("erros_30d") or 0)
    current_rows = decision_rows[:200]
    reference_rows = decision_rows[200:400]
    return {
        "available": True,
        "latency_ms": elapsed_ms,
        "decisions_30d": total,
        "technical_errors_30d": errors,
        "technical_error_rate_30d": errors / total if total else None,
        "local_ai_inference_p95_ms_30d": (
            float(decision_metrics["inferencia_p95_ms"])
            if decision_metrics.get("inferencia_p95_ms") is not None
            else None
        ),
        "queue_wait_p95_seconds_30d": float(queue_wait) if queue_wait is not None else None,
        "open_dead_letters": open_dlq,
        "reference_snapshot": snapshot_from_rows(reference_rows),
        "current_snapshot": snapshot_from_rows(current_rows),
        "snapshot_partition": "NON_OVERLAPPING_NEWEST_200_VS_PREVIOUS_200",
    }


def _backup_restore_age_hours(root: Path) -> float | None:
    latest: datetime | None = None
    for path in (root / "avaliacao" / "resultados" / "operacional").glob("*restore*.json"):
        try:
            payload = json.loads(path.read_text(encoding="utf-8"))
            if payload.get("status") != "PASS":
                continue
            result = payload.get("result") if isinstance(payload.get("result"), dict) else {}
            stamp = (
                payload.get("collected_at")
                or payload.get("executed_at")
                or result.get("executed_at")
                or payload.get("generated_at")
            )
            if not stamp:
                continue
            parsed = _parse_timestamp(str(stamp))
            latest = parsed if latest is None or parsed > latest else latest
        except (OSError, ValueError, json.JSONDecodeError):
            continue
    if latest is None:
        return None
    return max(0.0, (datetime.now(timezone.utc) - latest).total_seconds() / 3600.0)


def collect_observation(root: Path = ROOT, policy: Mapping[str, Any] | None = None) -> dict[str, Any]:
    policy = dict(policy or load_policy())
    live = collect_live_point_in_time(root)
    env = project_env(root)
    try:
        database = _database_observation(env)
    except Exception as exc:  # falha fechada; mensagem não inclui DSN nem segredo
        database = {
            "available": False,
            "error_type": type(exc).__name__,
            "reference_snapshot": {"sample_size": 0},
            "current_snapshot": {"sample_size": 0},
        }

    http = live.get("http_probes", {})
    availability = {
        name: 1.0 if 200 <= int(http.get(name, {}).get("status") or 0) < 300 else 0.0
        for name in ("local_ai", "n8n", "glpi")
    }
    availability["postgresql"] = 1.0 if database.get("available") else 0.0
    metrics = {
        "availability": availability,
        "local_ai_inference_p95_ms": database.get("local_ai_inference_p95_ms_30d"),
        "queue_wait_p95_seconds": database.get("queue_wait_p95_seconds_30d"),
        "open_dead_letters": database.get("open_dead_letters"),
        "technical_error_rate": database.get("technical_error_rate_30d"),
        # Rótulos-proxy não permitem verificar erro semântico crítico.
        "critical_automatic_error_count": None,
        "rollback_recovery_minutes": None,
        "backup_restore_age_hours": _backup_restore_age_hours(root),
    }
    drift = evaluate_drift(
        database.get("reference_snapshot", {"sample_size": 0}),
        database.get("current_snapshot", {"sample_size": 0}),
        policy=policy,
    )
    workflow_paths = sorted((root / "n8n" / "workflows" / "Versão9").glob("V9-WF*.json"))
    return {
        "schema_version": "1.0.0",
        "collected_at": utc_now(),
        "evidence_status": "POINT_IN_TIME_PROXY_TECHNICAL_EVIDENCE",
        "scientific_result": False,
        "semantic_correctness_confirmed": False,
        "live": live,
        "database": database,
        "metrics": metrics,
        "slo_point_in_time": evaluate_slo(metrics, policy),
        "drift": drift,
        "integrity": {
            "n8n_compose_sha256": sha256_file(root / "n8n" / "docker-compose.yml"),
            "policy_sha256": sha256_file(Path(__file__).with_name("politica_operacional_v1.json")),
            "workflow_sha256": {path.name: sha256_file(path) for path in workflow_paths},
        },
        "interpretation_limit": (
            "Coleta automática baseada em disponibilidade e rótulos-proxy. Não confirma correção semântica, "
            "não substitui rótulos normativos e não constitui uma janela de SLO até decorrer o período completo."
        ),
    }


def _window_metrics(rows: list[dict[str, Any]]) -> dict[str, Any]:
    availability: dict[str, float | None] = {}
    for name in ("local_ai", "n8n", "glpi", "postgresql"):
        values = [row.get("metrics", {}).get("availability", {}).get(name) for row in rows]
        numeric = [float(value) for value in values if value is not None]
        availability[name] = sum(numeric) / len(numeric) if numeric else None
    metrics = dict(rows[-1].get("metrics", {}))
    metrics["availability"] = availability
    return metrics


def summarize_windows(observations: list[dict[str, Any]], policy: Mapping[str, Any]) -> dict[str, Any]:
    valid = [row for row in observations if row.get("collected_at")]
    valid.sort(key=lambda row: str(row["collected_at"]))
    if not valid:
        return {"status": "NO_DATA", "observation_count": 0, "scientific_result": False}
    first = _parse_timestamp(str(valid[0]["collected_at"]))
    last = _parse_timestamp(str(valid[-1]["collected_at"]))
    elapsed = max(0.0, (last - first).total_seconds())
    window_seconds = int(policy["slo"]["window_seconds"])
    minimum_rows = int(policy["slo"]["minimum_observations_per_window"])
    windows: list[dict[str, Any]] = []
    cursor = first
    while (last - cursor).total_seconds() >= window_seconds:
        window_end = cursor.timestamp() + window_seconds
        rows = [
            row for row in valid
            if cursor.timestamp() <= _parse_timestamp(str(row["collected_at"])).timestamp() < window_end
        ]
        if len(rows) >= minimum_rows:
            drift_counts: dict[str, int] = {}
            for row in rows:
                status = str(row.get("drift", {}).get("status") or "NOT_AVAILABLE")
                drift_counts[status] = drift_counts.get(status, 0) + 1
            windows.append(
                {
                    "index": len(windows) + 1,
                    "start": cursor.isoformat().replace("+00:00", "Z"),
                    "end": datetime.fromtimestamp(window_end, timezone.utc).isoformat().replace("+00:00", "Z"),
                    "observation_count": len(rows),
                    "minimum_observations": minimum_rows,
                    "slo_evaluation": evaluate_slo(_window_metrics(rows), policy),
                    "drift_status_counts": drift_counts,
                    "semantic_correctness_confirmed": False,
                }
            )
        cursor = datetime.fromtimestamp(window_end, timezone.utc)
    completed = len(windows)
    required = int(policy["slo"]["minimum_observation_windows"])
    return {
        "status": "TECHNICAL_WINDOWS_COMPLETE" if completed >= required else "IN_PROGRESS",
        "window_mode": policy["slo"]["window_mode"],
        "window_seconds": window_seconds,
        "observation_count": len(valid),
        "first_collected_at": valid[0]["collected_at"],
        "last_collected_at": valid[-1]["collected_at"],
        "elapsed_seconds": elapsed,
        "completed_technical_windows": completed,
        "required_technical_windows": required,
        "windows": windows,
        "longitudinal_production_evaluation": "OUT_OF_SCOPE_BY_USER_DECISION",
        "longitudinal_production_window_days": policy["slo"]["longitudinal_production_window_days"],
        "scientific_result": False,
        "semantic_correctness_confirmed": False,
        "interpretation_limit": (
            "Janelas intradiárias de telemetria local/sintética verificam o mecanismo técnico, não "
            "estimam disponibilidade longitudinal de produção nem confirmam correção semântica."
        ),
    }


def _read_jsonl(path: Path) -> list[dict[str, Any]]:
    if not path.is_file():
        return []
    rows: list[dict[str, Any]] = []
    for line in path.read_text(encoding="utf-8").splitlines():
        try:
            value = json.loads(line)
            if isinstance(value, dict):
                rows.append(value)
        except json.JSONDecodeError:
            continue
    return rows


def _atomic_json(path: Path, payload: Mapping[str, Any]) -> None:
    temporary = path.with_suffix(path.suffix + ".tmp")
    temporary.write_text(json.dumps(payload, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
    os.replace(temporary, path)


@contextmanager
def _single_instance_lock(path: Path):
    """Trava pelo descritor; uma queda do processo não deixa bloqueio órfão."""
    handle = path.open("a+b")
    if path.stat().st_size == 0:
        handle.write(b"0")
        handle.flush()
    try:
        if os.name == "nt":
            import msvcrt

            handle.seek(0)
            msvcrt.locking(handle.fileno(), msvcrt.LK_NBLCK, 1)
        else:
            import fcntl

            fcntl.flock(handle.fileno(), fcntl.LOCK_EX | fcntl.LOCK_NB)
    except OSError:
        yield False
        handle.close()
        return
    try:
        yield True
    finally:
        try:
            if os.name == "nt":
                import msvcrt

                handle.seek(0)
                msvcrt.locking(handle.fileno(), msvcrt.LK_UNLCK, 1)
            else:
                import fcntl

                fcntl.flock(handle.fileno(), fcntl.LOCK_UN)
        except OSError:
            pass
        handle.close()


def run_once(runtime_dir: Path, policy: Mapping[str, Any]) -> dict[str, Any]:
    runtime_dir.mkdir(parents=True, exist_ok=True)
    lock_path = runtime_dir / "collector.lock"
    with _single_instance_lock(lock_path) as acquired:
        if not acquired:
            return {"status": "SKIPPED_OVERLAP", "scientific_result": False}
        observation = collect_observation(policy=policy)
        observations_path = runtime_dir / "observations.jsonl"
        with observations_path.open("a", encoding="utf-8") as target:
            target.write(json.dumps(observation, ensure_ascii=False, separators=(",", ":")) + "\n")
        rows = _read_jsonl(observations_path)
        summary = summarize_windows(rows, policy)
        _atomic_json(runtime_dir / "latest.json", observation)
        _atomic_json(runtime_dir / "windows.json", summary)
        return summary


def main(argv: list[str] | None = None) -> int:
    args = build_parser().parse_args(argv)
    policy = load_policy(args.policy) if args.policy else load_policy()
    result = run_once(args.runtime_dir.resolve(), policy)
    print(json.dumps(result, ensure_ascii=False))
    return 0 if result.get("status") != "SKIPPED_OVERLAP" else 2


if __name__ == "__main__":
    sys.exit(main())
