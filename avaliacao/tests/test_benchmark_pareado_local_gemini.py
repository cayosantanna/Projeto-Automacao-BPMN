from __future__ import annotations

import contextlib
import copy
import io
import json
import sys
import tempfile
import unittest
from collections import Counter
from pathlib import Path


ROOT = Path(__file__).resolve().parents[2]
SCRIPTS = ROOT / "avaliacao" / "scripts"
if str(SCRIPTS) not in sys.path:
    sys.path.insert(0, str(SCRIPTS))

import benchmark_pareado_local_gemini as paired  # noqa: E402


class PairedBenchmarkPlanTests(unittest.TestCase):
    @classmethod
    def setUpClass(cls) -> None:
        cls.rows = paired.load_jsonl(paired.DEFAULT_DATASET)
        cls.audit = paired.validate_reserved_dataset(
            paired.DEFAULT_DATASET, paired.DEFAULT_DATASET_MANIFEST, cls.rows
        )
        cls.local_candidate = paired.validate_local_candidate(
            paired.DEFAULT_LOCAL_MODEL_MANIFEST
        )
        cls.units = paired.build_units(cls.rows)

    def test_sample_is_deterministic_independent_core_and_balanced(self) -> None:
        repeated = paired.build_units(self.rows)
        self.assertEqual(
            paired.canonical_sha256(self.units), paired.canonical_sha256(repeated)
        )
        self.assertEqual(len(self.units), 140)
        self.assertEqual(len({unit["narrative_core_sha256"] for unit in self.units}), 140)
        tasks = Counter(unit["task"] for unit in self.units)
        labels = Counter((unit["task"], unit["gold"]["decision"]) for unit in self.units)
        self.assertEqual(tasks, {"classification": 40, "deduplication": 100})
        self.assertEqual(labels[("classification", "OBRA")], 10)
        self.assertEqual(labels[("classification", "DEMO")], 10)
        self.assertEqual(labels[("classification", "SOB_DEMANDA")], 10)
        self.assertEqual(labels[("classification", "TRIAGEM_MANUAL")], 10)
        self.assertEqual(labels[("deduplication", "DUPLICADO")], 40)
        self.assertEqual(labels[("deduplication", "NAO_DUPLICADO")], 60)

    def test_shared_input_has_no_gold_and_dedup_candidates_are_fixed(self) -> None:
        id_map = {
            str(row["case_id"]): index for index, row in enumerate(self.rows, start=1)
        }
        by_id = {str(row["case_id"]): row for row in self.rows}
        for unit in self.units:
            rendered = paired.canonical_json(unit["shared_input"])
            self.assertNotIn("expected_", rendered)
            self.assertNotIn("rationale", rendered)
            self.assertEqual(
                unit["shared_input_sha256"],
                paired.canonical_sha256(unit["shared_input"]),
            )
            self.assertIn(rendered, unit["gemini_prompt"])
            if unit["task"] != "deduplication":
                continue
            candidates = unit["shared_input"]["candidates"]
            self.assertEqual(len(candidates), 20)
            self.assertEqual(len({item["id"] for item in candidates}), 20)
            source = by_id[unit["case_id"]]
            anchor_numeric = id_map[str(source["contrast_anchor_case_id"])]
            self.assertIn(anchor_numeric, {item["id"] for item in candidates})

    def test_smaller_budget_sample_remains_stratified_and_deterministic(self) -> None:
        units = paired.build_units(
            self.rows, classification_core_limit=20, dedup_core_limit=10
        )
        labels = Counter((unit["task"], unit["gold"]["decision"]) for unit in units)
        self.assertEqual(len(units), 30)
        self.assertEqual(labels[("classification", "OBRA")], 5)
        self.assertEqual(labels[("classification", "DEMO")], 5)
        self.assertEqual(labels[("classification", "SOB_DEMANDA")], 5)
        self.assertEqual(labels[("classification", "TRIAGEM_MANUAL")], 5)
        self.assertEqual(labels[("deduplication", "DUPLICADO")], 4)
        self.assertEqual(labels[("deduplication", "NAO_DUPLICADO")], 6)

    def test_budget_is_conservative_and_insufficient_budget_fails(self) -> None:
        requirements = paired.budget_requirements(self.units)
        self.assertEqual(requirements["remote_calls"], 140)
        self.assertGreater(requirements["remote_tokens_conservative"], 140 * 768)
        with self.assertRaisesRegex(paired.BenchmarkGuardError, "Orçamento remoto insuficiente"):
            paired.preflight_budget(
                requirements,
                max_remote_calls=139,
                max_remote_tokens=requirements["remote_tokens_conservative"],
                max_rpm=10,
            )

    def test_plan_is_frozen_idempotently_and_never_overwritten(self) -> None:
        requirements = paired.budget_requirements(self.units)
        budget = paired.preflight_budget(
            requirements,
            max_remote_calls=140,
            max_remote_tokens=requirements["remote_tokens_conservative"],
            max_rpm=10,
        )
        plan, units_bytes = paired.build_plan(
            dataset=paired.DEFAULT_DATASET,
            dataset_manifest=paired.DEFAULT_DATASET_MANIFEST,
            rows=self.rows,
            dataset_audit=self.audit,
            local_candidate=self.local_candidate,
            units=self.units,
            seed=paired.DEFAULT_SEED,
            realizations_per_core=1,
            classification_core_limit=40,
            dedup_core_limit=100,
            candidate_limit=20,
            gemini_model=paired.DEFAULT_MODEL,
            max_output_tokens_per_call=768,
            budget=budget,
        )
        self.assertFalse(plan["scientific_status"]["scientific_result"])
        self.assertFalse(plan["scientific_status"]["confirmatory_claim_allowed"])
        self.assertFalse(plan["remote"]["fallback_enabled"])
        self.assertFalse(plan["remote"]["retry_enabled"])
        with tempfile.TemporaryDirectory() as temporary:
            output = Path(temporary) / "plan"
            _, _, reused = paired.freeze_plan(output, plan, units_bytes, execute=False)
            self.assertFalse(reused)
            _, _, reused = paired.freeze_plan(output, plan, units_bytes, execute=False)
            self.assertTrue(reused)
            changed = copy.deepcopy(plan)
            changed["paired_design"]["seed"] += 1
            with self.assertRaisesRegex(paired.BenchmarkGuardError, "diverge"):
                paired.freeze_plan(output, changed, units_bytes, execute=False)
            with self.assertRaisesRegex(paired.BenchmarkGuardError, "previamente congelado"):
                paired.freeze_plan(
                    Path(temporary) / "missing", plan, units_bytes, execute=True
                )

    def test_cli_requires_all_three_remote_limits(self) -> None:
        with contextlib.redirect_stderr(io.StringIO()):
            with self.assertRaises(SystemExit):
                paired.parse_args([])



    def test_default_main_is_dry_run_and_creates_no_predictions(self) -> None:
        requirements = paired.budget_requirements(self.units)
        with tempfile.TemporaryDirectory() as temporary:
            output = Path(temporary) / "frozen"
            with contextlib.redirect_stdout(io.StringIO()) as stdout:
                code = paired.main(
                    [
                        "--output-dir",
                        str(output),
                        "--max-remote-calls",
                        str(requirements["remote_calls"]),
                        "--max-remote-tokens",
                        str(requirements["remote_tokens_conservative"]),
                        "--max-rpm",
                        "10",
                    ]
                )
            self.assertEqual(code, 0)
            self.assertIn("Nenhuma API", stdout.getvalue())
            self.assertTrue((output / paired.PLAN_FILENAME).is_file())
            self.assertTrue((output / paired.UNITS_FILENAME).is_file())
            self.assertFalse((output / paired.RESULTS_FILENAME).exists())


class PairedBenchmarkExecutionGuardsTests(unittest.TestCase):
    @classmethod
    def setUpClass(cls) -> None:
        rows = paired.load_jsonl(paired.DEFAULT_DATASET)
        all_units = paired.build_units(rows)
        cls.units = [
            next(unit for unit in all_units if unit["task"] == "classification"),
            next(unit for unit in all_units if unit["task"] == "deduplication"),
        ]

    def test_preflight_refuses_before_any_transport_call(self) -> None:
        calls: list[str] = []

        def transport(url: str, headers: dict, payload: dict, timeout: float) -> tuple[int, dict]:
            calls.append(url)
            return 500, {}

        requirements = paired.budget_requirements(self.units)
        with self.assertRaisesRegex(paired.BenchmarkGuardError, "Orçamento remoto insuficiente"):
            paired.run_execution(
                self.units,
                gemini_model=paired.DEFAULT_MODEL,
                local_model="local-hybrid-v1.1.0",
                gemini_key="dummy-secret",
                local_base_url="http://127.0.0.1:8090",
                local_token="",
                max_remote_calls=1,
                max_remote_tokens=requirements["remote_tokens_conservative"],
                max_rpm=100,
                max_output_tokens_per_call=768,
                seed=paired.DEFAULT_SEED,
                timeout_seconds=1,
                post_json=transport,
                sleeper=lambda _: None,
            )
        self.assertEqual(calls, [])

    def test_exactly_one_gemini_call_per_unit_and_no_fallback(self) -> None:
        calls: list[tuple[str, dict[str, str], dict]] = []
        remote_index = 0

        def transport(url: str, headers: dict, payload: dict, timeout: float) -> tuple[int, dict]:
            nonlocal remote_index
            calls.append((url, headers, payload))
            if "127.0.0.1" in url and "/classify" in url:
                return 200, {
                    "result": {
                        "tipo": "MANUTENCAO",
                        "executor": "DEMO",
                        "confianca": 0.8,
                    },
                    "metadata": {
                        "gates": [],
                        "candidate_evaluation_eligible": True,
                    },
                }
            if "127.0.0.1" in url and "/deduplicate" in url:
                return 200, {
                    "result": {
                        "eh_duplicado": False,
                        "chamado_referencia_id": None,
                        "confianca": 0.8,
                    },
                    "metadata": {
                        "gates": [],
                        "candidate_evaluation_eligible": True,
                    },
                }
            unit = self.units[remote_index]
            remote_index += 1
            decision = unit["gold"]["decision"]
            value = {
                "decision": decision,
                "confidence": 0.9,
                "rationale": "fixture",
            }
            if unit["task"] == "deduplication":
                value["reference_id"] = unit["gold"].get("reference_id")
                if decision == "NAO_DUPLICADO":
                    value["reference_id"] = None
            return 200, {
                "candidates": [
                    {"content": {"parts": [{"text": json.dumps(value)}]}}
                ],
                "usageMetadata": {
                    "promptTokenCount": 10,
                    "candidatesTokenCount": 5,
                    "totalTokenCount": 15,
                },
            }

        requirements = paired.budget_requirements(self.units)
        records = paired.run_execution(
            self.units,
            gemini_model=paired.DEFAULT_MODEL,
            local_model="local-hybrid-v1.1.0",
            gemini_key="dummy-secret-not-logged",
            local_base_url="http://127.0.0.1:8090",
            local_token="local-secret",
            max_remote_calls=2,
            max_remote_tokens=requirements["remote_tokens_conservative"],
            max_rpm=100000,
            max_output_tokens_per_call=768,
            seed=paired.DEFAULT_SEED,
            timeout_seconds=1,
            post_json=transport,
            sleeper=lambda _: None,
        )
        remote_calls = [item for item in calls if "googleapis.com" in item[0]]
        self.assertEqual(len(remote_calls), 2)
        self.assertTrue(
            all(
                item[0].endswith("gemini-3.5-flash:generateContent")
                for item in remote_calls
            )
        )
        self.assertEqual(len(records), 4)
        serialized = json.dumps(records)
        self.assertNotIn("dummy-secret-not-logged", serialized)
        self.assertNotIn("local-secret", serialized)

    def test_secret_redaction_covers_google_key_shape(self) -> None:
        key = "AIza" + "A" * 32
        value = paired.redact(f"falha key={key}", [key])
        self.assertNotIn(key, value)
        self.assertIn("REDACTED", value)

    def test_duplicate_with_wrong_candidate_is_not_scored_correct(self) -> None:
        rows = paired.load_jsonl(paired.DEFAULT_DATASET)
        unit = next(
            item
            for item in paired.build_units(rows)
            if item["task"] == "deduplication"
            and item["gold"]["decision"] == "DUPLICADO"
        )
        wrong_reference = next(
            candidate["id"]
            for candidate in unit["shared_input"]["candidates"]
            if candidate["id"] != unit["gold"]["reference_id"]
        )
        record = paired._prediction_record(
            unit=unit,
            provider=paired.REMOTE_PROVIDER,
            model=paired.DEFAULT_MODEL,
            status=200,
            latency_ms=1.0,
            normalized=(True, "DUPLICADO", 0.9, False, wrong_reference, None),
            usage=None,
            raw_body={},
            secrets=[],
        )
        self.assertFalse(record["correct"])

    def test_intermediate_dedup_confidence_is_abstention_for_both_providers(self) -> None:
        unit = next(item for item in self.units if item["task"] == "deduplication")
        local = paired.normalize_local(
            unit,
            200,
            {
                "result": {
                    "eh_duplicado": False,
                    "chamado_referencia_id": None,
                    "confianca": 0.80,
                    "probabilidades": {"duplicado": 0.20, "nao_duplicado": 0.80},
                },
                "metadata": {
                    "gates": [],
                    "candidate_evaluation_eligible": True,
                },
            },
        )
        self.assertTrue(local[0])
        self.assertEqual(local[1], "TRIAGEM_MANUAL")
        self.assertTrue(local[3])

        remote_body = {
            "candidates": [
                {
                    "content": {
                        "parts": [
                            {
                                "text": json.dumps(
                                    {
                                        "decision": "NAO_DUPLICADO",
                                        "reference_id": None,
                                        "confidence": 0.80,
                                        "rationale": "incerto",
                                    }
                                )
                            }
                        ]
                    }
                }
            ]
        }
        remote = paired.normalize_gemini(unit, 200, remote_body)
        self.assertTrue(remote[0])
        self.assertEqual(remote[1], "TRIAGEM_MANUAL")
        self.assertTrue(remote[3])

    def test_classification_triagem_is_semantic_class_not_abstention(self) -> None:
        all_units = paired.build_units(paired.load_jsonl(paired.DEFAULT_DATASET))
        unit = next(
            item
            for item in all_units
            if item["task"] == "classification"
            and item["gold"]["decision"] == "TRIAGEM_MANUAL"
        )
        local_body = {
            "result": {
                "tipo": "TRIAGEM_MANUAL",
                "executor": "FISCAL",
                "confianca": 0.94,
            },
            "metadata": {
                "candidate_evaluation_eligible": True,
                "pipeline_evaluation_eligible": True,
                "decision_path": "hybrid_model",
                "features": {
                    "semantic_class_prediction": "TRIAGEM_MANUAL",
                    "operational_abstention": False,
                },
            },
        }
        normalized_local = paired.normalize_local(unit, 200, local_body)
        self.assertTrue(normalized_local[0])
        self.assertEqual(normalized_local[1], "TRIAGEM_MANUAL")
        self.assertFalse(normalized_local[3])
        record = paired._prediction_record(
            unit=unit,
            provider=paired.LOCAL_PROVIDER,
            model="local-hybrid-v1.8.0",
            status=200,
            latency_ms=1.0,
            normalized=normalized_local,
            usage=None,
            raw_body=local_body,
            secrets=[],
        )
        self.assertEqual(record["predicted_class"], "TRIAGEM_MANUAL")
        self.assertFalse(record["operational_abstention"])
        self.assertTrue(record["routed_to_human"])
        self.assertTrue(record["correct"])

        remote_body = {
            "candidates": [
                {
                    "content": {
                        "parts": [
                            {
                                "text": json.dumps(
                                    {
                                        "decision": "TRIAGEM_MANUAL",
                                        "confidence": 0.94,
                                        "rationale": "requer análise fiscal",
                                    }
                                )
                            }
                        ]
                    }
                }
            ]
        }
        normalized_remote = paired.normalize_gemini(unit, 200, remote_body)
        self.assertTrue(normalized_remote[0])
        self.assertEqual(normalized_remote[1], "TRIAGEM_MANUAL")
        self.assertFalse(normalized_remote[3])

    def test_metrics_separate_abstention_semantic_triage_and_human_route(self) -> None:
        records = [
            {
                "task": "classification",
                "ok": True,
                "decision": "TRIAGEM_MANUAL",
                "predicted_class": "TRIAGEM_MANUAL",
                "operational_abstention": False,
                "routed_to_human": True,
                "gold": {"decision": "TRIAGEM_MANUAL"},
                "reference_id": None,
                "latency_ms": 1.0,
            },
            {
                "task": "classification",
                "ok": True,
                "decision": "TRIAGEM_MANUAL",
                "predicted_class": "OBRA",
                "operational_abstention": True,
                "routed_to_human": True,
                "gold": {"decision": "OBRA"},
                "reference_id": None,
                "latency_ms": 1.0,
            },
            {
                "task": "classification",
                "ok": True,
                "decision": "DEMO",
                "predicted_class": "DEMO",
                "operational_abstention": False,
                "routed_to_human": False,
                "gold": {"decision": "DEMO"},
                "reference_id": None,
                "latency_ms": 1.0,
            },
        ]
        metrics = paired._provider_metrics(records)
        self.assertEqual(metrics["abstention_count"], 1)
        self.assertEqual(metrics["predicted_class_triagem_manual"], 1)
        self.assertEqual(metrics["routed_to_human_total"], 2)
        self.assertAlmostEqual(metrics["semantic_coverage"], 2 / 3)
        self.assertAlmostEqual(metrics["straight_through_automation_coverage"], 1 / 3)
        self.assertEqual(metrics["selective_accuracy"], 1.0)
        self.assertEqual(
            metrics["confusion"],
            {
                "DEMO->DEMO": 1,
                "OBRA->ABSTENCAO": 1,
                "TRIAGEM_MANUAL->TRIAGEM_MANUAL": 1,
            },
        )

    def test_abstention_does_not_increment_automatic_false_negative(self) -> None:
        unit = next(
            item
            for item in self.units
            if item["task"] == "deduplication"
        )
        positive_unit = copy.deepcopy(unit)
        positive_unit["gold"] = {"decision": "DUPLICADO", "reference_id": None}
        record = paired._prediction_record(
            unit=positive_unit,
            provider=paired.LOCAL_PROVIDER,
            model="local-hybrid-v1.1.0",
            status=200,
            latency_ms=1.0,
            normalized=(True, "TRIAGEM_MANUAL", 0.5, True, None, None),
            usage=None,
            raw_body={},
            secrets=[],
        )
        metrics = paired._provider_metrics([record])
        self.assertEqual(metrics["dedup_false_negatives"], 0)
        self.assertEqual(metrics["abstentions"], 1)
        self.assertEqual(metrics["automation_coverage"], 0.0)

    def test_paired_summary_rejects_pairs_when_either_arm_is_invalid(self) -> None:
        plan = {
            "manifest_payload_sha256": "a" * 64,
            "remote": {"budget": {}},
        }
        base = {
            "unit_id": "PAIR-INVALID",
            "task": "classification",
            "decision": None,
            "gold": {"decision": "DEMO"},
            "reference_id": None,
            "abstained": False,
            "latency_ms": 1.0,
            "usage": None,
        }
        summary = paired.summarize(
            [
                {**base, "provider": paired.LOCAL_PROVIDER, "ok": False},
                {**base, "provider": paired.REMOTE_PROVIDER, "ok": False},
            ],
            plan,
        )
        pair = summary["paired"]
        self.assertEqual(pair["attempted_pairs"], 1)
        self.assertEqual(pair["jointly_valid_pairs"], 0)
        self.assertEqual(pair["complete_pairs"], 0)
        self.assertEqual(pair["invalid_pairs"], 1)
        self.assertIsNone(pair["mcnemar_exact_two_sided_p"])
        self.assertFalse(pair["mcnemar_evaluable"])
        self.assertEqual(summary["status"], "REJECTED_NO_JOINTLY_VALID_PAIRS")

    def test_paired_summary_computes_mcnemar_only_on_jointly_valid_pairs(self) -> None:
        plan = {
            "manifest_payload_sha256": "b" * 64,
            "remote": {"budget": {}},
        }

        def record(unit_id: str, provider: str, ok: bool) -> dict:
            return {
                "unit_id": unit_id,
                "provider": provider,
                "task": "classification",
                "ok": ok,
                "decision": "DEMO" if ok else None,
                "predicted_class": "DEMO" if ok else None,
                "operational_abstention": False,
                "routed_to_human": False,
                "gold": {"decision": "DEMO"},
                "reference_id": None,
                "latency_ms": 1.0,
                "usage": None,
            }

        summary = paired.summarize(
            [
                record("PAIR-VALID", paired.LOCAL_PROVIDER, True),
                record("PAIR-VALID", paired.REMOTE_PROVIDER, True),
                record("PAIR-PARTIAL", paired.LOCAL_PROVIDER, True),
                record("PAIR-PARTIAL", paired.REMOTE_PROVIDER, False),
            ],
            plan,
        )
        pair = summary["paired"]
        self.assertEqual(pair["attempted_pairs"], 2)
        self.assertEqual(pair["jointly_valid_pairs"], 1)
        self.assertEqual(pair["complete_pairs"], 1)
        self.assertEqual(pair["both_correct"], 1)
        self.assertEqual(pair["both_not_correct"], 0)
        self.assertEqual(pair["mcnemar_exact_two_sided_p"], 1.0)
        self.assertTrue(pair["mcnemar_evaluable"])
        self.assertEqual(summary["status"], "PARTIAL_VALID_PAIRS_NON_CONFIRMATORY")


class LocalOnlyBenchmarkTests(unittest.TestCase):
    @classmethod
    def setUpClass(cls) -> None:
        cls.rows = paired.load_jsonl(paired.DEFAULT_DEV_DATASET)
        cls.audit = paired.validate_local_only_dataset(
            paired.DEFAULT_DEV_DATASET,
            paired.DEFAULT_DEV_DATASET_MANIFEST,
            cls.rows,
            allow_reserved=False,
        )
        cls.local_candidate = paired.validate_local_candidate(
            paired.DEFAULT_LOCAL_MODEL_MANIFEST
        )

    def test_full_development_design_has_expected_cores_and_realizations(self) -> None:
        units = paired.build_local_only_units(self.rows)
        repeated = paired.build_local_only_units(self.rows)
        self.assertEqual(paired.canonical_sha256(units), paired.canonical_sha256(repeated))
        self.assertEqual(len(units), 1240)
        tasks = Counter(unit["task"] for unit in units)
        self.assertEqual(tasks, {"classification": 640, "deduplication": 600})
        cores = Counter(unit["scenario_id"] for unit in units)
        self.assertEqual(len(cores), 248)
        self.assertEqual(set(cores.values()), {5})
        self.assertTrue(all("gemini_prompt" not in unit for unit in units))
        self.assertTrue(all("budget" not in unit for unit in units))

    def test_local_only_cli_needs_no_remote_caps_and_dry_run_calls_no_api(self) -> None:
        args = paired.parse_args(["--local-only"])
        self.assertTrue(args.local_only)
        self.assertIsNone(args.max_remote_calls)
        with tempfile.TemporaryDirectory() as temporary:
            output = Path(temporary) / "local-plan"
            with contextlib.redirect_stdout(io.StringIO()) as stdout:
                code = paired.main(
                    [
                        "--local-only",
                        "--output-dir",
                        str(output),
                        "--classification-cores",
                        "4",
                        "--dedup-cores",
                        "2",
                        "--realizations-per-core",
                        "1",
                    ]
                )
            self.assertEqual(code, 0)
            self.assertIn("chamadas_remotas=0", stdout.getvalue())
            self.assertTrue((output / paired.LOCAL_PLAN_FILENAME).is_file())
            self.assertFalse((output / paired.LOCAL_RESULTS_FILENAME).exists())

    def test_local_execution_never_uses_remote_and_preserves_abstention(self) -> None:
        all_units = paired.build_local_only_units(
            self.rows,
            realizations_per_core=1,
            classification_core_limit=4,
            dedup_core_limit=2,
        )
        units = [
            next(unit for unit in all_units if unit["task"] == "classification"),
            next(unit for unit in all_units if unit["task"] == "deduplication"),
        ]
        calls: list[str] = []

        def transport(url: str, headers: dict, payload: dict, timeout: float) -> tuple[int, dict]:
            calls.append(url)
            metadata = {
                "gates": ["operational_abstention"] if "deduplicate" in url else [],
                "features": {"runtime": "hybrid_joblib"},
                "candidate_evaluation_eligible": True,
                "pipeline_evaluation_eligible": True,
                "artifact": {"version": "fixture"},
            }
            if "classify" in url:
                return 200, {
                    "result": {
                        "tipo": "MANUTENCAO",
                        "executor": "DEMO",
                        "confianca": 0.9,
                    },
                    "metadata": metadata,
                }
            return 200, {
                "result": {
                    "eh_duplicado": False,
                    "chamado_referencia_id": None,
                    "confianca": 0.5,
                    "probabilidades": {"duplicado": 0.5, "nao_duplicado": 0.5},
                },
                "metadata": metadata,
            }

        records = paired.run_local_only_execution(
            units,
            local_model="local-hybrid-v1.1.0",
            local_base_url="http://127.0.0.1:8090",
            local_token="local-secret",
            timeout_seconds=1,
            post_json=transport,
        )
        self.assertEqual(len(calls), 2)
        self.assertTrue(all("127.0.0.1" in url for url in calls))
        dedup = next(row for row in records if row["task"] == "deduplication")
        self.assertTrue(dedup["abstained"])
        self.assertEqual(dedup["decision"], "TRIAGEM_MANUAL")
        self.assertEqual(dedup["decision_path"], "MODEL_ABSTENTION")
        self.assertNotIn("local-secret", json.dumps(records))

    def test_local_summary_has_task_core_path_and_eligibility_strata(self) -> None:
        unit = paired.build_local_only_units(
            self.rows,
            realizations_per_core=1,
            classification_core_limit=4,
            dedup_core_limit=2,
        )[0]
        record = paired._prediction_record(
            unit=unit,
            provider=paired.LOCAL_PROVIDER,
            model="local-hybrid-v1.1.0",
            status=200,
            latency_ms=2.0,
            normalized=(True, unit["gold"]["decision"], 0.9, False, None, None),
            usage=None,
            raw_body={
                "metadata": {
                    "features": {"runtime": "hybrid_joblib"},
                    "candidate_evaluation_eligible": True,
                    "pipeline_evaluation_eligible": True,
                }
            },
            secrets=[],
        )
        plan, _ = paired.build_local_only_plan(
            dataset=paired.DEFAULT_DEV_DATASET,
            dataset_manifest=paired.DEFAULT_DEV_DATASET_MANIFEST,
            dataset_audit=self.audit,
            local_candidate=self.local_candidate,
            units=[unit],
            seed=paired.DEFAULT_SEED,
            realizations_per_core=1,
            classification_core_limit=4,
            dedup_core_limit=2,
            candidate_limit=20,
        )
        summary = paired.summarize_local_only([record], plan)
        self.assertFalse(summary["scientific_result"])
        self.assertIn(unit["task"], summary["metrics"]["by_task"])
        self.assertIn(unit["scenario_id"], summary["metrics"]["by_core"])
        self.assertIn("HYBRID_MODEL", summary["metrics"]["by_decision_path"])
        self.assertEqual(
            summary["metrics"]["eligibility_strata"]["pipeline_complete_system"]["metrics"]["total"],
            1,
        )
        self.assertEqual(
            summary["metrics"]["eligibility_strata"]["model_only"]["metrics"]["total"],
            1,
        )

    def test_resummarize_existing_is_offline_hashed_and_idempotent(self) -> None:
        record = {
            "unit_id": "LOCAL-DERIVED",
            "ordinal": 1,
            "task": "classification",
            "case_id": "DEV-DERIVED",
            "scenario_id": "DEV_CLS_TRIAGEM_MANUAL_001",
            "provider": paired.LOCAL_PROVIDER,
            "model": "local-hybrid-v1.8.0",
            "ok": True,
            "decision": "TRIAGEM_MANUAL",
            "confidence": 0.95,
            "abstained": True,
            "decision_path": "HYBRID_MODEL",
            "reference_id": None,
            "gold": {"decision": "TRIAGEM_MANUAL"},
            "correct": True,
            "http_status": 200,
            "latency_ms": 1.0,
            "usage": None,
            "runtime_provenance": {
                "candidate_evaluation_eligible": True,
                "pipeline_evaluation_eligible": True,
                "pipeline_eligibility_declared": True,
            },
        }
        plan = {
            "manifest_payload_sha256": "c" * 64,
            "runtime_source_provenance": {},
        }
        with tempfile.TemporaryDirectory() as temporary:
            source = Path(temporary)
            (source / paired.LOCAL_RESULTS_FILENAME).write_text(
                paired.canonical_json(record) + "\n", encoding="utf-8"
            )
            (source / paired.LOCAL_PLAN_FILENAME).write_text(
                json.dumps(plan), encoding="utf-8"
            )
            destination, summary, reused = paired.resummarize_existing(source)
            self.assertFalse(reused)
            self.assertTrue(destination.is_file())
            self.assertEqual(summary["schema_version"], paired.SUMMARY_SCHEMA_VERSION)
            metrics = summary["metrics"]["all_contract_valid"]
            self.assertEqual(metrics["abstention_count"], 0)
            self.assertEqual(metrics["predicted_class_triagem_manual"], 1)
            self.assertEqual(metrics["routed_to_human_total"], 1)
            self.assertEqual(metrics["semantic_coverage"], 1.0)
            self.assertFalse(
                summary["metric_recalculation"]["inference_reexecuted"]
            )
            self.assertRegex(
                summary["metric_recalculation"]["source_predictions_sha256"],
                r"^[0-9a-f]{64}$",
            )
            second_path, second_summary, reused = paired.resummarize_existing(source)
            self.assertTrue(reused)
            self.assertEqual(second_path, destination)
            self.assertEqual(second_summary, summary)

    def test_reserved_local_requires_explicit_flag_and_one_shot_ledger(self) -> None:
        rows = paired.load_jsonl(paired.DEFAULT_DATASET)
        with self.assertRaisesRegex(paired.BenchmarkGuardError, "one-shot"):
            paired.validate_local_only_dataset(
                paired.DEFAULT_DATASET,
                paired.DEFAULT_DATASET_MANIFEST,
                rows,
                allow_reserved=False,
            )
        audit = paired.validate_local_only_dataset(
            paired.DEFAULT_DATASET,
            paired.DEFAULT_DATASET_MANIFEST,
            rows,
            allow_reserved=True,
        )
        with tempfile.TemporaryDirectory() as temporary:
            ledger = Path(temporary) / "once.json"
            paired._begin_reserved_once(
                ledger,
                dataset_sha256=audit["dataset_sha256"],
                plan_sha256="a" * 64,
            )
            with self.assertRaisesRegex(paired.BenchmarkGuardError, "já foi iniciada"):
                paired._begin_reserved_once(
                    ledger,
                    dataset_sha256=audit["dataset_sha256"],
                    plan_sha256="a" * 64,
                )


if __name__ == "__main__":
    unittest.main()
