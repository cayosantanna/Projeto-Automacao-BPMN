"""
Script de inicialização do servidor local_ai com variáveis de ambiente configuradas.
"""

from __future__ import annotations

import os
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
sys.path.insert(0, str(ROOT))

os.environ["LOCAL_AI_MODE"] = "production"
os.environ["LOCAL_AI_HOST"] = "0.0.0.0"
os.environ["LOCAL_AI_PORT"] = "8090"
os.environ["LOCAL_AI_API_TOKEN"] = "local-ai-projeto-ic-2026-8090-7f4a1c9e"
os.environ["LOCAL_AI_CPU_THREADS"] = "2"
os.environ["LOCAL_AI_MAX_CONCURRENT"] = "4"
os.environ["LOCAL_AI_MAX_EMBED_BATCH"] = "4"
os.environ["LOCAL_AI_DEV_FALLBACK"] = "off"
os.environ["LOCAL_AI_ALLOW_MODEL_DOWNLOAD"] = "false"
os.environ["LOCAL_AI_EMBED_BACKEND"] = "pytorch_fp32"
os.environ["LOCAL_AI_EMBED_MODEL_REVISION"] = "835ad14087e140460703cf0fae09f97d469d65c2"
os.environ["LOCAL_AI_EMBED_MODEL_PATH"] = str(ROOT / "local_ai" / "models" / "granite-embedding-97m-multilingual-r2")
os.environ["LOCAL_AI_MAX_CANDIDATES"] = "20"
os.environ["LOCAL_AI_HYBRID_MANIFEST"] = str(ROOT / "local_ai" / "artifacts" / "local_hybrid_manifest.json")
os.environ["HF_HUB_OFFLINE"] = "1"
os.environ["TRANSFORMERS_OFFLINE"] = "1"
os.environ["TOKENIZERS_PARALLELISM"] = "false"
os.environ["PYTHONUNBUFFERED"] = "1"

if __name__ == "__main__":
    from local_ai.config import Settings
    from local_ai.http_api import serve

    settings = Settings.from_env()
    serve(settings)
