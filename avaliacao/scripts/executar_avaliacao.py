from __future__ import annotations

import argparse
import csv
import datetime as dt
import hashlib
import json
import math
import subprocess
import sys
from collections import Counter
from pathlib import Path


ROOT = Path(__file__).resolve().parents[2]
SCRIPT_DIR = Path(__file__).resolve().parent
GENERATOR = SCRIPT_DIR / "gerar_dataset_avaliacao.py"
CHECKER = SCRIPT_DIR / "conferir_gabarito.py"
BASELINE = SCRIPT_DIR / "comparar_baselines.py"
VALIDATOR = ROOT / "n8n" / "workflows" / "Versão9" / "validate_v9_static.py"
DATASET_VALIDATOR = SCRIPT_DIR / "validar_dataset.py"
SAMPLE_PLANNER = SCRIPT_DIR / "planejar_amostra.py"
DATASET_VERSION = "dataset-v2.0.0-episodico"
MODEL_CONFIG = ROOT / "avaliacao" / "config" / "modelos_ia_v1.json"
MODEL_ROLES = ("PRIMARY", "SECONDARY", "LOCAL")


def run(command: list[str]) -> None:
    print(f"[EXEC] {' '.join(command)}", flush=True)
    result = subprocess.run(command, cwd=ROOT, check=False)
    if result.returncode:
        raise RuntimeError(
            f"Comando terminou com codigo {result.returncode}: "
            f"{' '.join(command)}"
        )


def sha256(path: Path) -> str:
    return hashlib.sha256(path.read_bytes()).hexdigest()


def model_metadata(role: str = "PRIMARY") -> tuple[str, dict]:
    normalized_role = str(role or "PRIMARY").upper()
    if normalized_role not in MODEL_ROLES:
        raise ValueError(
            f"Papel de modelo desconhecido: {normalized_role}. "
            f"Use um de: {', '.join(MODEL_ROLES)}."
        )
    config = json.loads(MODEL_CONFIG.read_text(encoding="utf-8"))
    selected = (config.get("models") or {}).get(normalized_role)
    if not isinstance(selected, dict):
        raise RuntimeError(f"Papel {normalized_role} ausente em {MODEL_CONFIG}.")
    if not selected.get("model") or not selected.get("provider"):
        raise RuntimeError(
            f"Papel {normalized_role} sem model/provider em {MODEL_CONFIG}."
        )
    return normalized_role, selected


def generation_profile(role: str, model: dict) -> str:
    if role == "PRIMARY":
        return "gemini-3.5-flash_default-sampling_medium-thinking"
    thinking = str(model.get("thinking_profile") or "provider_default")
    return f"{model['model']}_fixed-{thinking}"


def code_manifest(phase: str = "", model_role: str = "PRIMARY") -> dict:
    normalized_role, selected_model = model_metadata(model_role)
    workflow_dir = ROOT / "n8n" / "workflows" / "Versão9"
    files = [
        ROOT / "database" / "init_v9.sql",
        ROOT / "n8n" / "docker-compose.yml",
        ROOT / "n8n" / ".env",
        ROOT / "requirements.txt",
        ROOT / "avaliacao" / "manifesto_modelo_prompts.json",
        MODEL_CONFIG,
        ROOT / "avaliacao" / "datasets" / "cenarios_v2.json",
        ROOT / "local_ai" / "models" / "manifest.json",
        ROOT / "local_ai" / "artifacts" / "local_hybrid_manifest.json",
        ROOT / "local_ai" / "artifacts" / "local_hybrid_bundle.joblib",
    ]
    # O hash científico cobre tanto os geradores quanto os artefatos realmente
    # importados no n8n. Helpers/gateway não podem mudar sem alterar o freeze.
    files.extend(sorted(workflow_dir.glob("*.py")))
    files.extend(sorted(workflow_dir.glob("V9-*.json")))
    files.extend(sorted(SCRIPT_DIR.glob("*.py")))
    files.extend(sorted((ROOT / "local_ai").glob("*.py")))
    files.extend(sorted((ROOT / "local_ai" / "scripts").glob("*.ps1")))
    files.extend(sorted((ROOT / "local_ai").glob("requirements*.txt")))
    files.extend(
        sorted((ROOT / "avaliacao" / "prompts").glob("prompt_*.txt"))
    )
    files.extend(
        sorted((ROOT / "avaliacao" / "schemas").glob("*.schema.json"))
    )
    hashes = {
        str(path.relative_to(ROOT)): sha256(path)
        for path in dict.fromkeys(files)
    }
    aggregate = hashlib.sha256(
        json.dumps(hashes, sort_keys=True).encode()
    ).hexdigest()
    return {
        "code_sha256": aggregate,
        "files": hashes,
        "model_role": normalized_role,
        "model": selected_model["model"],
        "provider": selected_model["provider"],
        "generation_profile": generation_profile(normalized_role, selected_model),
        "prompt_dedup_version": "deduplicacao_v9.1-episodica",
        "prompt_classif_version": "classificacao_v9.1-episodica",
        "dataset_version": DATASET_VERSION,
        "evaluation_phase": phase.upper() if phase else "NAO_INFORMADA",
        "test_mode": True,
        "auto_human_confirmation": True,
        "auto_human_confirmation_source": "ORACULO_GABARITO",
        "scientific_result": False,
    }


def recommended_variations(pilot_dataset: Path, margin: float = 0.10) -> int:
    cases = [
        json.loads(line)
        for line in pilot_dataset.read_text(encoding="utf-8").splitlines()
        if line.strip()
    ]
    counts = Counter(
        case["expected_classification"]
        for case in cases
        if case.get("expected_classification")
    )
    if not counts:
        raise RuntimeError("Piloto sem classes para planejamento amostral.")
    minimum = math.ceil((1.959963984540054**2) * 0.25 / (margin**2))
    return max(math.ceil(minimum / count) for count in counts.values())


def export_predictions(run_id: str, path: Path) -> None:
    sys.path.insert(0, str(SCRIPT_DIR))
    import conferir_gabarito as checker

    rows = checker.query(
        """
        SELECT DISTINCT ON (case_id,etapa)
          case_id,etapa,predicao,confianca,output_normalizado
        FROM ia_decisoes
        WHERE run_id=%s
        ORDER BY case_id,etapa,criado_em DESC,id DESC
        """,
        (run_id,),
    )
    with path.open("w", encoding="utf-8", newline="") as handle:
        writer = csv.DictWriter(
            handle,
            fieldnames=["case_id", "etapa", "predicao", "confianca", "probabilidades"],
        )
        writer.writeheader()
        for row in rows:
            normalized = row.get("output_normalizado") or {}
            writer.writerow(
                {
                    "case_id": row["case_id"],
                    "etapa": row["etapa"],
                    "predicao": row["predicao"],
                    "confianca": row["confianca"],
                    "probabilidades": json.dumps(
                        normalized.get("probabilidades"),
                        ensure_ascii=False,
                        default=str,
                    ),
                }
            )


def require_quiescent_queue() -> None:
    sys.path.insert(0, str(SCRIPT_DIR))
    import conferir_gabarito as checker

    count = checker.query(
        """
        SELECT COUNT(*)::int AS n
        FROM tickets_processados
        WHERE triagem_status IN (
          'PENDENTE_FILA_IA','FILA_IA_LIBERADA','CLASSIFICANDO_DUP',
          'CLASSIFICANDO','AGUARDANDO_FILA_CLASSIFICACAO'
        )
        """
    )[0]["n"]
    if count:
        raise RuntimeError(
            f"Execução recusada: existem {count} tickets na fila operacional."
        )


def freeze_run(
    run_id: str,
    manifest_path: Path,
    calibration_path: Path | None,
    threshold_path: Path | None,
    phase: str = "",
    model_role: str = "PRIMARY",
) -> None:
    sys.path.insert(0, str(SCRIPT_DIR))
    import conferir_gabarito as checker

    manifest = code_manifest(phase, model_role)
    if calibration_path:
        calibration = json.loads(calibration_path.read_text(encoding="utf-8"))
        if calibration.get("approved") is not True:
            raise RuntimeError("O arquivo de calibração não está aprovado.")
        manifest["calibration"] = calibration
        manifest["calibration_file_sha256"] = sha256(calibration_path)
    if threshold_path:
        threshold = json.loads(threshold_path.read_text(encoding="utf-8"))
        if threshold.get("approved") is not True:
            raise RuntimeError("O arquivo de calibração do limiar não está aprovado.")
        env_values = {}
        for line in (ROOT / "n8n" / ".env").read_text(
            encoding="utf-8"
        ).splitlines():
            if "=" in line and not line.lstrip().startswith("#"):
                key, value = line.split("=", 1)
                env_values[key.strip()] = value.strip()
        configured = float(env_values["IA_CONFIANCA_MINIMA"])
        selected = float(threshold["selected_threshold"])
        if abs(configured - selected) > 1e-9:
            raise RuntimeError(
                f".env usa IA_CONFIANCA_MINIMA={configured}, mas o piloto "
                f"aprovou {selected}. Atualize, regenere e republique antes do teste."
            )
        manifest["threshold_calibration"] = threshold
        manifest["selected_thresholds"] = threshold.get("selected_thresholds") or {
            "classification": selected,
            "deduplication": selected,
        }
        manifest["abstention_policy"] = threshold.get("abstention_policy") or {}
        manifest["threshold_calibration_file_sha256"] = sha256(threshold_path)
    manifest_path.parent.mkdir(parents=True, exist_ok=True)
    manifest_path.write_text(
        json.dumps(manifest, ensure_ascii=False, indent=2) + "\n",
        encoding="utf-8",
    )
    checker.execute(
        """
        UPDATE experimentos_avaliacao
        SET generation_config=COALESCE(generation_config,'{}'::jsonb) || %s::jsonb,
            congelado_em=NOW()
        WHERE run_id=%s AND status='PREPARANDO'
        """,
        (json.dumps(manifest, ensure_ascii=False), run_id),
    )


def finalize_automated_validation(run_id: str) -> None:
    """Conclui a execução técnica sem acionar gates de benchmark humano."""
    sys.path.insert(0, str(SCRIPT_DIR))
    import conferir_gabarito as checker

    summary = checker.pending_summary(run_id)
    if summary["pendentes"]:
        raise RuntimeError(
            f"Validação automatizada ainda possui {summary['pendentes']} chamados pendentes."
        )
    checker.execute(
        """
        UPDATE experimentos_avaliacao
        SET status='CONCLUIDO_AUTOMATIZADO',concluido_em=NOW(),
            auditoria_humana_concluida=FALSE,
            generation_config=COALESCE(generation_config,'{}'::jsonb) ||
              '{"scientific_result":false,"confirmatory_eligible":false,'
              '"validation_status":"COMPLETED_AUTOMATED"}'::jsonb
        WHERE run_id=%s
        """,
        (run_id,),
    )


def fail_automated_validation(run_id: str, reason: str) -> None:
    """Fecha a validação e envia a fila residual a uma DLQ auditável."""
    sys.path.insert(0, str(SCRIPT_DIR))
    import conferir_gabarito as checker

    safe_reason = reason[:1000]
    checker.execute(
        """
        WITH targets AS MATERIALIZED (
          SELECT tp.id,tp.triagem_status,tp.fila_etapa,tp.fila_tentativas,
                 dc.case_id,dc.episode_id
          FROM tickets_processados tp
          JOIN dataset_controle dc ON dc.ticket_id=tp.id
          WHERE dc.run_id=%s
            AND tp.triagem_status IN (
              'PENDENTE_FILA_IA','FILA_IA_LIBERADA','CLASSIFICANDO_DUP',
              'CLASSIFICANDO','AGUARDANDO_FILA_CLASSIFICACAO'
            )
          FOR UPDATE OF tp
        ), dlq AS (
          INSERT INTO fila_ia_dead_letter(
            ticket_id,etapa,tentativa_numero,erro,run_id,case_id,episode_id,
            payload_contexto
          )
          SELECT id,COALESCE(fila_etapa,'DESCONHECIDA'),
                 GREATEST(COALESCE(fila_tentativas,0),0),%s,%s,case_id,episode_id,
                 jsonb_build_object(
                   'source','AUTOMATED_VALIDATION_FAILURE',
                   'status_anterior',triagem_status,
                   'model_attempt',FALSE
                 )
          FROM targets
          ON CONFLICT(ticket_id,etapa,tentativa_numero) DO NOTHING
          RETURNING ticket_id
        ), closed_tickets AS (
          UPDATE tickets_processados tp
          SET triagem_status='ERRO_IA',
              ultimo_erro_ia=%s,
              fila_ultimo_erro=%s,
              fila_disponivel_em=NULL,
              fila_liberar_em=NULL,
              fila_reservada_em=NULL,
              ultima_acao_workflow='VALIDACAO_AUTOMATIZADA_FALHOU',
              atualizado_em=NOW()
          FROM targets t
          WHERE tp.id=t.id
          RETURNING tp.id
        )
        UPDATE experimentos_avaliacao
        SET status='FALHOU_AUTOMATIZADO',concluido_em=NOW(),
            auditoria_humana_concluida=FALSE,
            generation_config=COALESCE(generation_config,'{}'::jsonb) ||
              jsonb_build_object(
                'scientific_result',FALSE,
                'confirmatory_eligible',FALSE,
                'validation_status','FAILED_AUTOMATED',
                'failure_reason',%s
              )
        WHERE run_id=%s AND status IN ('PREPARANDO','EXECUTANDO')
        """,
        (
            run_id,
            safe_reason,
            run_id,
            safe_reason,
            safe_reason,
            safe_reason,
            run_id,
        ),
    )


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(
        description=(
            "Executa piloto, validação automatizada não confirmatória ou "
            "benchmark episódico com gates científicos."
        )
    )
    parser.add_argument("fase", choices=["piloto", "validacao", "benchmark"])
    parser.add_argument("--por-cenario", type=int)
    parser.add_argument(
        "--model-role",
        choices=MODEL_ROLES,
        default="PRIMARY",
        help=(
            "Papel fixo do modelo na execucao. Em validacao e benchmark o "
            "fallback permanece desabilitado."
        ),
    )
    parser.add_argument(
        "--scenario-set",
        choices=("primary33", "stress2", "all35"),
        default="primary33",
        help="Conjunto de cenarios do gerador episodico.",
    )
    parser.add_argument("--seed", type=int, default=20260702)
    parser.add_argument("--run-id", default="")
    parser.add_argument("--piloto-validado-run-id", default="")
    parser.add_argument("--piloto-dataset", type=Path)
    parser.add_argument("--calibracao-aprovada", type=Path)
    parser.add_argument("--limiar-aprovado", type=Path)
    parser.add_argument(
        "--timeout",
        type=int,
        default=86400,
        help="Timeout do benchmark em segundos; padrão de 24 h cobre a fila cadenciada.",
    )
    parser.add_argument("--saida-dir", default="avaliacao/resultados")
    parser.add_argument("--bootstrap", type=int, default=2000)
    parser.add_argument(
        "--confidence-threshold",
        type=float,
        help=(
            "Limiar ativo; deve coincidir com n8n/.env. No novo piloto, use 0.50 "
            "para permitir a análise de sensibilidade completa."
        ),
    )
    parser.add_argument(
        "--predicao-alternativa",
        action="append",
        default=[],
        help="NOME=arquivo.csv; pode ser repetido para outro LLM/modelo próprio.",
    )
    return parser.parse_args()


def build_generator_command(
    args: argparse.Namespace,
    per_scenario: int,
    run_id: str,
    dataset_prefix: Path,
    threshold: float,
) -> list[str]:
    return [
        sys.executable,
        str(GENERATOR),
        "--por-cenario",
        str(per_scenario),
        "--seed",
        str(args.seed),
        "--scenario-set",
        args.scenario_set,
        "--dataset-version",
        DATASET_VERSION,
        "--split",
        {
            "piloto": "PILOTO",
            "validacao": "VALIDACAO",
            "benchmark": "TESTE",
        }[args.fase],
        "--model-role",
        args.model_role,
        "--run-id",
        run_id,
        "--saida",
        str(dataset_prefix),
        "--confidence-threshold",
        str(threshold),
        "--origem",
        (
            "VALIDACAO_AUTOMATIZADA_NAO_CONFIRMATORIA"
            if args.fase == "validacao"
            else "AVALIACAO_V2_EPISODICA"
        ),
        "--criar-glpi",
        "--registrar-dataset-controle",
    ]


def main() -> int:
    args = parse_args()
    env_values = {}
    for line in (ROOT / "n8n" / ".env").read_text(encoding="utf-8").splitlines():
        if "=" in line and not line.lstrip().startswith("#"):
            key, value = line.split("=", 1)
            env_values[key.strip()] = value.strip()
    configured_threshold = float(env_values["IA_CONFIANCA_MINIMA"])
    threshold = (
        args.confidence_threshold
        if args.confidence_threshold is not None
        else configured_threshold
    )
    if not 0 <= threshold <= 1:
        raise SystemExit("--confidence-threshold deve estar entre 0 e 1.")
    if abs(threshold - configured_threshold) > 1e-9:
        raise SystemExit(
            "--confidence-threshold deve coincidir com IA_CONFIANCA_MINIMA "
            f"do n8n/.env ({configured_threshold})."
        )
    if args.fase == "piloto" and abs(threshold - 0.50) > 1e-9:
        raise SystemExit(
            "O novo piloto metodológico exige IA_CONFIANCA_MINIMA=0.50 para "
            "permitir a curva 0.50–0.95. Atualize n8n/.env, recrie o n8n e "
            "execute novamente."
        )
    per_scenario = args.por_cenario or {
        "piloto": 1,
        "validacao": 2,
        "benchmark": 33,
    }[args.fase]
    if args.fase == "benchmark":
        if not args.piloto_validado_run_id:
            raise SystemExit("Benchmark exige --piloto-validado-run-id.")
        if not args.piloto_dataset:
            raise SystemExit("Benchmark exige --piloto-dataset.")
        if not args.calibracao_aprovada:
            raise SystemExit("Benchmark exige --calibracao-aprovada.")
        if not args.limiar_aprovado:
            raise SystemExit("Benchmark exige --limiar-aprovado.")
        required_variations = recommended_variations(args.piloto_dataset)
        if per_scenario < required_variations:
            raise SystemExit(
                f"Benchmark exige ao menos {required_variations} variações por "
                "cenário para o suporte conservador de ±10% por classe."
            )
    timestamp = dt.datetime.now().strftime("%Y%m%dT%H%M%S")
    run_id = args.run_id or f"{args.fase.upper()}-{timestamp}"
    out_dir = ROOT / args.saida_dir / run_id
    dataset_prefix = out_dir / "dataset"
    out_dir.mkdir(parents=True, exist_ok=False)

    run([sys.executable, str(VALIDATOR)])
    require_quiescent_queue()
    run(build_generator_command(args, per_scenario, run_id, dataset_prefix, threshold))
    if args.fase == "benchmark":
        run(
            [
                sys.executable,
                str(DATASET_VALIDATOR),
                str(dataset_prefix.with_suffix(".jsonl")),
                "--comparar-com",
                str(args.piloto_dataset),
            ]
        )
        run(
            [
                sys.executable,
                str(SAMPLE_PLANNER),
                str(args.piloto_dataset),
                "--saida",
                str(out_dir / "planejamento_amostral.json"),
            ]
        )
    freeze_run(
        run_id,
        out_dir / "freeze_manifest.json",
        args.calibracao_aprovada,
        args.limiar_aprovado,
        args.fase,
        args.model_role,
    )

    checker_base = [sys.executable, str(CHECKER), "--run-id", run_id]
    processing_args = [
            "--liberar-fila",
            "--aguardar-processamento",
            "--resolver-confirmacoes-automaticas",
            "--timeout",
            str(args.timeout),
            "--registrar-gabarito",
        ]
    report_args = [
        "--gerar-relatorio",
        "--saida",
        str(out_dir.relative_to(ROOT)),
        "--bootstrap",
        str(args.bootstrap),
        "--seed",
        str(args.seed),
    ]
    if args.fase == "validacao":
        try:
            run(checker_base + processing_args)
            finalize_automated_validation(run_id)
            run(checker_base + report_args)
        except Exception as exc:
            fail_automated_validation(run_id, f"{type(exc).__name__}: {exc}")
            raise
    else:
        run(checker_base + processing_args + report_args)
    if args.fase == "benchmark":
        normalized_role, selected_model = model_metadata(args.model_role)
        if normalized_role == "PRIMARY":
            predictions_filename = "predicoes_gemini_3_5_flash.csv"
            prediction_label = "GEMINI_3_5_FLASH"
        else:
            predictions_filename = f"predicoes_{normalized_role.lower()}.csv"
            prediction_label = normalized_role
        predictions_path = out_dir / predictions_filename
        export_predictions(run_id, predictions_path)
        baseline_command = [
            sys.executable,
            str(BASELINE),
            "--piloto",
            str(args.piloto_dataset),
            "--teste",
            str(dataset_prefix.with_suffix(".jsonl")),
            "--predicoes",
            f"{prediction_label}={predictions_path}",
            "--saida",
            str(out_dir / "comparacao_baselines.json"),
            "--seed",
            str(args.seed),
            "--bootstrap",
            str(args.bootstrap),
        ]
        for prediction in args.predicao_alternativa:
            baseline_command.extend(["--predicoes", prediction])
        run(baseline_command)
        if not args.predicao_alternativa:
            print(
                "[AVISO] Nenhum outro LLM/modelo próprio foi informado; "
                f"a comparação final contém {selected_model['model']} e "
                "baselines não-LLM."
            )
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
