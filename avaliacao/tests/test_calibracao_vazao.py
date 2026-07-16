from __future__ import annotations

import sys
import unittest
from pathlib import Path


ROOT = Path(__file__).resolve().parents[2]
SCRIPTS = ROOT / "avaliacao" / "scripts"
if str(SCRIPTS) not in sys.path:
    sys.path.insert(0, str(SCRIPTS))

import calibrar_vazao  # noqa: E402


class CalibracaoVazaoTests(unittest.TestCase):
    def test_requested_sample_size_is_exact_and_deterministic(self) -> None:
        first = calibrar_vazao.calibration_cases(12, 2026062502)
        second = calibrar_vazao.calibration_cases(12, 2026062502)

        self.assertEqual(len(first), 12)
        self.assertEqual(
            [case.case_id for case in first],
            [case.case_id for case in second],
        )
        self.assertTrue(all(case.dimension == "CLASSIFICACAO" for case in first))

    def test_non_positive_sample_size_is_rejected(self) -> None:
        with self.assertRaisesRegex(ValueError, "maior que zero"):
            calibrar_vazao.calibration_cases(0, 2026062502)


if __name__ == "__main__":
    unittest.main()
