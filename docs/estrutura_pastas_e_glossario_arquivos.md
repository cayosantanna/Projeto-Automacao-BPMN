# Estrutura de Pastas e Glossário Completo de Arquivos

**Projeto:** Automação de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Data:** 18 de Agosto de 2026

---

## 1. Mapa Geral de Diretórios

```
projeto-ic/
├── avaliacao/            # Módulo de avaliação científica, datasets, benchmarks e testes
│   ├── config/           # Arquivos JSON de configuração dos protocolos e modelos
│   ├── datasets/         # Corpus sintéticos de desenvolvimento (V1/V2), holdout e rotulagens
│   ├── resultados/       # Resultados experimentais das rodadas de seleção supervisionada
│   ├── scripts/          # Scripts de execução de benchmarks, treino, calibração e estatística
│   └── tests/            # Testes unitários do pipeline de avaliação científica
├── database/             # Schemas SQL e migrações do PostgreSQL
├── docs/                 # Documentação técnica, científica, auditorias e tutoriais
├── glpi/                 # Configurações Docker Compose, inicialização e seed do GLPI
├── local_ai/             # Runtime de inferência local (PyTorch, Granite 97M, FastAPI/REST)
│   ├── artifacts/        # Bundles serializados (.joblib) e manifestos criptográficos
│   ├── models/           # Arquivos do modelo Granite Embedding 97M Multilingual R2
│   └── tests/            # Testes unitários e de contrato do runtime local
├── n8n/                  # Orquestração de workflows no n8n
│   ├── history/          # Histórico de versões anteriores (V1 a V8) e manifestos
│   └── workflows/        # Workflows ativos da Versão 9 e geradores em Python
├── backups/              # Backups periódicos dos workflows do n8n
├── requirements.txt      # Dependências Python globais congeladas
└── README.md             # Visão geral e instruções rápidas do projeto
```

---

## 2. Glossário Arquivo por Arquivo

### 2.1. Raiz do Projeto
* `README.md`: Apresentação geral do projeto, guia rápido de início e status das métricas.
* `requirements.txt`: Dependências Python com versões estritamente fixadas.
* `.gitignore`: Filtro de exclusão de artefatos temporários, caches e arquivos de ambiente sensíveis.

---

### 2.2. Diretório `avaliacao/` (Avaliação Científica)
* **`config/`**:
  * `selecao_modelos_supervisionados_v1.json`: Protocolo da rodada inicial de seleção (1.360 registros).
  * `selecao_modelos_supervisionados_v2.json`: Protocolo da rodada expandida V2 (2.800 registros, 90 configurações).
  * `modelos_ia_v1.json`: Definição de provedores de IA (Local, Gemini, DeepSeek).
  * `tamanho_amostra_v4.json`: Planejamento amostral e dimensionamento estatístico.
* **`datasets/`**:
  * `desenvolvimento_local_v2.jsonl`: Corpus de treino e validação cruzada com 2.800 registros estruturados.
  * `corpus_v3_teste.jsonl`: Conjunto de teste confirmatório intocado.
  * `validacao_rotulos_piloto_v2.csv`: Planilha estruturada para auditoria e controle amostral.
* **`resultados/`**:
  * `selecao-supervisionada-v1.3-20260812/`: Resultados, rankings e predições OOF da rodada V1.
  * `selecao-supervisionada-v2/`: Resultados completos, rankings, matrizes de confusão, XAI (SHAP) e predições OOF da rodada V2.
* **`scripts/`**:
  * `gerar_corpus_desenvolvimento_local_v2.py`: Gerador determinístico do corpus V2 de 2.800 amostras.
  * `selecionar_modelos_supervisionados.py`: Executor da validação cruzada 5-fold agrupada nas 90 configurações.
  * `validar_resultados_selecao.py`: Validador independente de integridade dos resultados da seleção.
  * `materializar_candidato_selecao.py`: Empacotador do modelo campeão para o formato `local_hybrid_bundle.joblib`.
  * `gerar_diagnostico_acertos_ia.py`: Gerador do relatório de diagnóstico de acertos da IA.
  * `testar_interfaces_web.py`: Script Playwright que valida as interfaces do GLPI, n8n e Mailpit em navegador real.
  * `calibrar_limiar.py` e `calibrar_vazao.py`: Ajuste de limiares de decisão e vazão da fila.
  * `sincronizar_manifesto.py`: Sincronizador dos hashes criptográficos de prompts e workflows.
* **`tests/`**:
  * 240 testes automatizados cobrindo geração de dados, métricas, contratos e validações estatísticas.

---

### 2.3. Diretório `local_ai/` (Runtime de Inferência Local)
* `http_api.py`: Servidor HTTP leve com endpoints `/health`, `/v1/classify` e `/v1/deduplicate`.
* `inference.py`: Orquestrador de pipelines de inferência local.
* `backends.py`: Backend PyTorch FP32 para extração de embeddings locais do Granite 97M.
* `hybrid.py`: Extrator de atributos híbridos (TF-IDF esparso + Vetor denso 384d).
* `artifacts.py`: Carregador seguro de modelos joblib e manifestos JSON com verificação de integridade SHA-256.
* `contracts.py`: Schemas e validação de contratos de entrada e saída.
* `text.py`: Normalizador e pré-processador de texto em português.
* `cache.py`: Sistema de cache local de embeddings.
* `requirements-hybrid.txt`: Dependências específicas de Machine Learning (PyTorch, scikit-learn, joblib).
* **`artifacts/`**:
  * `local_hybrid_bundle.joblib`: Modelo campeão ativo serializado.
  * `local_hybrid_manifest.json`: Manifesto com metadados e hashes do modelo ativo.
  * `manifest.json`: Manifesto raiz de conformidade do container.
  * `candidates/`: Histórico de modelos candidatos versionados (`v1.8.0`, `v1.9.0`, `v1.9.1`, `v2.0.0`).
* **`models/`**:
  * Arquivos safetensors e configurações do modelo IBM Granite 97M Multilingual R2.
* **`tests/`**:
  * 56 testes unitários cobrindo contratos, extração de texto, backends PyTorch e endpoints REST.

---

### 2.4. Diretório `n8n/` (Orquestração de Workflows)
* `docker-compose.yml`: Definição do serviço n8n e do banco de dados PostgreSQL.
* `.env`: Variáveis de ambiente operacionais e parâmetros de modelo.
* `.env.local`: Isolamento de chaves secretas de APIs remotas (não versionado).
* **`history/`**:
  * `VERSOES.md`: Tabela com o histórico e descrição das versões V1 a V9.
  * `workflows/`: Backups históricos dos fluxos JSON das versões V1 a V8.
* **`workflows/Versão9/`**:
  * `ai_gateway_builder.py`: Gerador do nó Code de IA com retries intra-provedor, backoff exponencial e jitter.
  * `retry_queue_builder.py`: Gerador do nó Code de fila assíncrona com controle de vazão.
  * `build_wf01.py` a `build_wf06.py`: Construtores determinísticos dos 6 workflows V9.
  * `V9-WF01-Sincronizador.json` a `V9-WF06-Fila-IA.json`: Workflows compilados ativos no n8n.
  * `validate_v9_static.py`: Bateria de 115 asserções estáticas de segurança e integridade.
  * `deploy.py` / `deploy_rest_session.py`: Scripts de compilação e implantação automatizada via REST.

---

### 2.5. Diretório `glpi/` (Service Desk GLPI)
* `docker-compose.yml`: Definição dos containers do GLPI 10 e MariaDB 10.11.
* `init_glpi_db.sql`: Script de estrutura inicial do banco MariaDB.
* `seed/seed_glpi.py`: Script de povoamento de tickets, categorias e perfis no GLPI.
* `scripts/`: Utilitários para criação de tokens de API e testes de conectividade.

---

### 2.6. Diretório `database/` (Persistência & Auditoria)
* `init_v9.sql`: Script completo de migração do banco PostgreSQL V9 (15 tabelas com índices, advisory locks e particionamento lógico).

---

### 2.7. Diretório `docs/` (Documentação Acadêmica & Técnica)
* `diagnostico_validacao_cientifica.md`: Diagnóstico de validação estatística, poder amostral e adequação metodológica.
* `evolucao_arquitetura_v1_v9.md`: Histórico da evolução arquitetural de V1 a V9.
* `etapas_desenvolvimento_projeto.md`: As 7 macro-etapas de desenvolvimento da Iniciação Científica.
* `resultados_estatisticos_e_comparativo_gemini.md`: Resultados estatísticos e comparação multidimensional com Google Gemini.
* `tutorial_reproducao_e_implantacao.md`: Guia passo a passo para reproduzir experimentos e implantar o sistema.
* `estrutura_pastas_e_glossario_arquivos.md`: Mapeamento de pastas e glossário arquivo por arquivo.
* `resposta_professor_selecao_modelos.md`: Documento formal de respostas técnicas com citações acadêmicas.
* `auditoria_estado_projeto_20260818.md`: Auditoria completa do estado da infraestrutura, workflows e bancos.
