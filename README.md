# Triagem de chamados de manutenção com n8n, GLPI e modelo local

Este repositório contém a automação experimental usada para triar chamados de
manutenção do patrimônio de um campus federal. O sistema recebe chamados do
GLPI, controla a vazão no n8n, verifica possível duplicidade e classifica a
demanda como `DEMO`, `SOB_DEMANDA`, `OBRA` ou `TRIAGEM_MANUAL`.

A decisão principal usa um modelo local híbrido: TF-IDF, embeddings
multilíngues do IBM Granite 97M (384 dimensões) e regressão logística
calibrada. Casos incertos são encaminhados para revisão. A confirmação humana
de uma possível duplicidade permanece no GLPI: o link abre uma página de
confirmação somente leitura e a alteração só ocorre após envio explícito por
`POST`. O Gemini 3.5 Flash está
configurado apenas como contingência explícita; não há fallback durante
benchmarks.

## Componentes

- `glpi/`: ambiente GLPI local e plugin que envia os eventos;
- `n8n/`: PostgreSQL, n8n, Mailpit e os seis workflows V9;
- `local_ai/`: API local, extração determinística e modelo híbrido;
- `database/`: esquema de auditoria, fila e resultados;
- `avaliacao/`: datasets, protocolos, testes e scripts científicos.

Os pesos dos modelos, ambientes locais, backups, documentos internos e
resultados gerados não fazem parte do GitHub. O manifesto
`local_ai/models/manifest.json` registra os arquivos e hashes necessários para
reproduzir o ambiente.

## Requisitos

- Windows 10/11 com PowerShell;
- Python 3.12;
- Docker Desktop com Docker Compose;
- 8 GB de RAM; durante a inferência, execute somente os componentes do projeto;
- aproximadamente 2 GB livres para imagens, modelos e resultados.

## Instalação

Crie o ambiente e instale as dependências:

```powershell
python -m venv .venv
.\.venv\Scripts\Activate.ps1
python -m pip install --upgrade pip
python -m pip install -r requirements.txt
python -m pip install -r local_ai\requirements-granite.txt
python -m pip install -r local_ai\requirements-hybrid.txt
python -m playwright install chromium
python -m pip check
```

Copie os modelos indicados no manifesto para `local_ai/models`. O embedding
obrigatório é `ibm-granite/granite-embedding-97m-multilingual-r2`, revisão
`835ad14087e140460703cf0fae09f97d469d65c2`. O Granite 350M é um extrator
opcional e fica desligado por padrão.

Crie as configurações locais:

```powershell
Copy-Item n8n\.env.example n8n\.env
Copy-Item n8n\.env.example n8n\.env.local
Copy-Item glpi\.env.example glpi\.env
```

Edite os três arquivos e troque todos os valores `CHANGE_ME`. As chaves de API
remotas são opcionais para o funcionamento local. Nunca as grave em scripts,
JSONs ou commits.

## Execução

Suba o GLPI e a pilha de workflows:

```powershell
docker compose --env-file glpi\.env -f glpi\docker-compose.yml up -d
docker compose --env-file n8n\.env -f n8n\docker-compose.yml up -d
```

Inicie o modelo local em outro PowerShell:

```powershell
.\local_ai\scripts\start-local-ai.ps1
```

O script valida hashes, backend PyTorch FP32, dimensão 384, revisão do modelo e
o bundle antes de liberar a porta `8090`. Para consultar ou encerrar:

```powershell
.\local_ai\scripts\status-local-ai.ps1
.\local_ai\scripts\stop-local-ai.ps1
```

Regere e valide os workflows antes de implantá-los:

```powershell
python n8n\workflows\Versão9\validate_v9_static.py
python n8n\workflows\Versão9\deploy.py
```

Com `N8N_API_KEY` configurada, o comando usa a API REST pública. Sem essa chave,
ele usa o CLI do container n8n e exige a pilha ativa e as credenciais já criadas.
Antes de alterar o n8n, o comando reconstrói os seis JSONs e executa o validador
estático. As interfaces padrão são GLPI em `http://localhost:9080`, n8n em
`http://localhost:5678` e Mailpit em `http://localhost:18025`.

## Verificação

```powershell
python -m unittest discover -s local_ai\tests -t . -v
python -m pytest avaliacao\tests -q
python n8n\workflows\Versão9\validate_v9_static.py
python avaliacao\scripts\testar_interfaces_web.py --saida avaliacao\resultados\interfaces-web-local
```

O conjunto `primary33` contém 33 cenários e 30 realizações por cenário. Isso
representa 990 realizações, mas 1.410 tickets GLPI, porque os 14 cenários de
duplicidade usam pares. Variações de redação do mesmo cenário são medidas
repetidas, não observações independentes.

## Uso científico responsável

Resultados de desenvolvimento sintético servem para regressão, calibração e
teste de integração. Eles não comprovam eficácia no cotidiano. Uma conclusão
para publicação requer amostra independente congelada, rótulos humanos ou
adjudicados e análise por núcleo/episódio. O oráculo automático de testes apenas
percorre os mesmos links do fiscal com um gabarito sintético; ele não é revisão
humana.

Não compare modelos usando acurácia apenas entre respostas válidas se um deles
falhou em parte relevante dos casos. Relate também falhas, cobertura,
abstenções, latência, falsos positivos, falsos negativos e proveniência.

Na regressão de desenvolvimento v1.8, a cobertura semântica global foi 54,11%
e a acurácia seletiva 99,70%; 40,73% dos itens concluíram sem intervenção
humana. Esses números são concordância em corpus sintético de desenvolvimento,
não validação científica final. A comparação de eficácia contra Gemini e o
holdout independente continuam pendentes.
