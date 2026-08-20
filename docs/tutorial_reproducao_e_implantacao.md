# Tutorial Passo a Passo: Reprodução dos Experimentos e Implantação do Sistema

**Projeto:** Automação de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Data:** 18 de Agosto de 2026

---

## 1. Pré-Requisitos do Ambiente

### 1.1. Hardware Recomendado
* **Processador:** 4 núcleos ou superior (x86_64).
* **Memória RAM:** Mínimo 8 GB (Recomendado: 16 GB).
* **Armazenamento:** 20 GB de espaço livre em disco.

### 1.2. Softwares e Dependências
* **Docker & Docker Compose** (v24.0+).
* **Python** 3.11 ou 3.12 instalado na máquina host.
* **Git** para versionamento.

---

## 2. Preparação do Ambiente e Dependências Python

Abra o terminal PowerShell ou Bash na raiz do projeto (`projeto-ic`):

```powershell
# 1. Criar e ativar ambiente virtual
python -m venv .venv
.\.venv\Scripts\Activate.ps1

# 2. Instalar dependências exatas
pip install -r requirements.txt
pip install -r local_ai/requirements-hybrid.txt
```

---

## 3. Subida dos Contêineres Docker (Infraestrutura)

O projeto é composto por 5 contêineres orquestrados:

```powershell
# 1. Subir banco de dados e GLPI
docker compose -f glpi/docker-compose.yml up -d

# 2. Subir banco PostgreSQL e n8n
docker compose -f n8n/docker-compose.yml up -d

# 3. Verificar se todos os 5 contêineres estão saudáveis
docker ps
```

* **GLPI:** Acessível em `http://localhost:9080` (Usuário padrão: `glpi` / `glpi`).
* **n8n:** Acessível em `http://localhost:5678` (Login configurado: `adm@mail.com` / `Adm2026.`).
* **Mailpit:** Acessível em `http://localhost:18025` (Interface web de e-mails).

---

## 4. Povoamento do Banco e Inicialização do GLPI

```powershell
# 1. Executar o script de seed no GLPI (cria categorias, perfis e tickets base)
python glpi/seed/seed_glpi.py

# 2. Inicializar o schema relacional V9 no PostgreSQL
# (Geralmente executado automaticamente na inicialização via database/init_v9.sql)
```

---

## 5. Implantação e Ativação dos 6 Workflows V9 no n8n

Execute o script de compilação determinística e implantação via API REST:

```powershell
# Compila os JSONs, valida as asserções estáticas e faz deploy no container n8n
python n8n/workflows/Versão9/deploy.py
```

O script confirmará a ativação dos 6 workflows:
* `V9 - WF01 Sincronizador`
* `V9 - WF02 Triagem`
* `V9 - WF03 Classificação`
* `V9 - WF04 Decisão Fiscal`
* `V9 - WF05 Métricas`
* `V9 - WF06 Fila IA`

---

## 6. Reprodução dos Experimentos Científicos

### 6.1. Geração do Dataset de Desenvolvimento V2
```powershell
python avaliacao/scripts/gerar_corpus_desenvolvimento_local_v2.py
```

### 6.2. Execução da Seleção Supervisionada de 90 Modelos (5-Fold CV)
```powershell
python avaliacao/scripts/selecionar_modelos_supervisionados.py --config avaliacao/config/selecao_modelos_supervisionados_v2.json --saida avaliacao/resultados/selecao-supervisionada-v2
```

### 6.3. Validação Independente dos Resultados
```powershell
python avaliacao/scripts/validar_resultados_selecao.py --saida avaliacao/resultados/selecao-supervisionada-v2 --config avaliacao/config/selecao_modelos_supervisionados_v2.json
```

### 6.4. Materialização do Bundle V2 para o Runtime Local
```powershell
python avaliacao/scripts/materializar_candidato_selecao.py --selection-dir avaliacao/resultados/selecao-supervisionada-v2 --output-dir local_ai/artifacts/candidates/local-hybrid-v2.0.0 --allow-underpowered-development-candidate --dedup-candidate-id deduplication__hybrid__granite97m__logistic_regression
```

---

## 7. Bateria de Testes Automatizados e Verificação Web

Para validar 100% da integridade do sistema em qualquer momento:

```powershell
# 1. Testes de inferência e contratos do runtime local (56 testes)
python -m unittest local_ai.tests.test_contracts local_ai.tests.test_artifacts_and_extract local_ai.tests.test_hybrid_bundle_embeddings local_ai.tests.test_http_api local_ai.tests.test_pytorch_backend_contract

# 2. Testes de gateway de IA (16 testes)
python -m unittest avaliacao/tests/test_gateway_multimodelo.py

# 3. Testes unitários do pipeline científico (240 testes)
python -m unittest discover -s avaliacao/tests -p "test_*.py"

# 4. Validação estática dos workflows n8n (115 asserções)
python n8n/workflows/Versão9/validate_v9_static.py

# 5. Teste automatizado de navegador (Playwright - 12 verificações)
python avaliacao/scripts/testar_interfaces_web.py
```
