import importlib.util
import json
import unittest
from pathlib import Path


ROOT = Path(__file__).resolve().parents[2]
MODULE_PATH = ROOT / "n8n" / "workflows" / "Versão9" / "deploy_rest_session.py"
SPEC = importlib.util.spec_from_file_location("deploy_rest_session", MODULE_PATH)
deploy = importlib.util.module_from_spec(SPEC)
assert SPEC and SPEC.loader
SPEC.loader.exec_module(deploy)


class DeployWorkflowSelectionTests(unittest.TestCase):
    def test_canonical_id_wins_over_homonymous_legacy_copy(self):
        canonical = json.loads(
            (MODULE_PATH.parent / "V9-WF06-Fila-IA.json").read_text(encoding="utf-8")
        )
        workflows = [
            {"id": "legacy-copy", "name": canonical["name"], "active": False},
            {
                "id": canonical["id"],
                "name": canonical["name"],
                "active": True,
                "isArchived": True,
            },
        ]
        resolved = deploy.resolve_workflow_ids(workflows)
        self.assertEqual(resolved[canonical["name"]], canonical["id"])


if __name__ == "__main__":
    unittest.main()
