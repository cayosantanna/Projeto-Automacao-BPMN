# Serviço local de decisão

Esta API atende os workflows V9 sem depender de uma chamada remota. O caminho
principal combina normalização determinística, TF-IDF de palavras e caracteres,
embeddings IBM Granite 97M e regressão logística calibrada. O backend oficial é
PyTorch FP32 e produz vetores com 384 dimensões.

```text
texto normalizado
  -> regras de suficiência e segurança
  -> TF-IDF + embedding Granite 97M
  -> regressão logística calibrada
  -> limiar positivo / limiar negativo / abstenção
  -> contrato JSON dos workflows V9
```

O Granite 350M é apenas um extrator estruturado opcional. Ele fica desligado por
padrão e nunca substitui silenciosamente o classificador.

## Versão vigente

- bundle: `local-hybrid-v1.8.0`;
- embedding: `ibm-granite/granite-embedding-97m-multilingual-r2`;
- revisão: `835ad14087e140460703cf0fae09f97d469d65c2`;
- backend: `pytorch_fp32`;
- dimensão: 384;
- deduplicação: limiar positivo 0,95, negativo 0,07 e margem mínima entre a
  primeira e a segunda referência de 0,035;
- estado científico: `PENDING_CONFIRMATORY_HOLDOUT`.

O SHA-256 do bundle vigente é
`f518b7f9699aa9e23aab7eb2479990619ad5085994569b3f7c3f253e5207bb5d`.
O manifesto e o bundle canônicos ficam em `local_ai/artifacts`. Os pesos ficam
fora do GitHub e são verificados pelo `local_ai/models/manifest.json`.

## Instalação e execução

```powershell
python -m pip install -r local_ai\requirements-granite.txt
python -m pip install -r local_ai\requirements-hybrid.txt
python -m pip check
.\local_ai\scripts\start-local-ai.ps1
```

O iniciador exige `IA_LOCAL_API_TOKEN` em `n8n/.env`, bloqueia download durante
a operação, valida hashes e aquece o embedding antes de informar que o serviço
está pronto. O extrator opcional pode ser iniciado com `-WithExtractor`.

```powershell
.\local_ai\scripts\status-local-ai.ps1
.\local_ai\scripts\stop-local-ai.ps1
```

## Contratos

- `POST /v1/classify`: classificação DEMO, SOB_DEMANDA, OBRA ou
  TRIAGEM_MANUAL;
- `POST /v1/deduplicate`: decisão e referência de duplicidade;
- `POST /v1/extract`: extração estruturada;
- `POST /v1/embed`: embedding e proveniência;
- `GET /health`: disponibilidade, bundle e elegibilidade.

O token deve ser enviado em `Authorization: Bearer <token>`. A API rejeita
corpos acima do limite, mais de 20 candidatos, backend diferente do congelado,
hash incompatível e respostas sem proveniência.

## Treinamento

O corpus de desenvolvimento autorizado é
`avaliacao/datasets/desenvolvimento_local_v1.jsonl`. O treinador mantém todos
os itens do mesmo núcleo/episódio no mesmo split e bloqueia conjuntos de teste
ou benchmark.

```powershell
python avaliacao\scripts\treinar_modelo_local.py `
  --dados avaliacao\datasets\desenvolvimento_local_v1.jsonl `
  --saida avaliacao\resultados\novo-candidato `
  --embedding-backend granite `
  --embedding-model-path local_ai\models\granite-embedding-97m-multilingual-r2 `
  --embedding-model-revision 835ad14087e140460703cf0fae09f97d469d65c2 `
  --cpu-threads 4 `
  --custo-fn-dedup 5 `
  --fn-dedup-maximo 0.02 `
  --fp-dedup-maximo 0.05 `
  --vpn-dedup-minimo 0.98 `
  --precisao-dedup-minima 0.90
```

O custo maior do falso negativo reflete o fluxo: uma decisão automática “não
duplicado” não passa pelo WF04. A faixa intermediária sempre resulta em
abstenção e revisão.

## Evidência atual

No corpus sintético de desenvolvimento, a v1.8 processou 1.240/1.240 itens sem
falha, teve cobertura automática de 49,52% e acurácia seletiva de 99,84%. A
deduplicação cobriu 35,5% e não apresentou FP ou FN nos 213 itens automatizados.
A classificação teve uma decisão automática errada e nenhum encaminhamento
automático de manutenção para OBRA. A latência geral foi 414 ms em média e 838
ms no p95.

Esses números são regressão interna sobre dados sintéticos. Não são resultado
confirmatório, não estimam desempenho em chamados reais e não autorizam marcar
`scientifically_validated=true`.

