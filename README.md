# Triagem inteligente de chamados GLPI com n8n e IA local

Protótipo operacional e plataforma de pesquisa para triagem, deduplicação e
classificação de chamados de manutenção predial. A arquitetura integra GLPI,
n8n, PostgreSQL e um serviço local de IA com Granite Embedding 97M.

> Estado em 2026-09-02: o caminho técnico V9 funciona no ambiente local, o E2E
> sintético final passou, fila/DLQ ficaram zeradas e uma homologação isolada
> com nove serviços está saudável. O modelo ainda **não possui validação
> confirmatória institucional**. `scientific_ready=false` e
> `confirmatory_claim_allowed=false` são estados corretos, não falhas a ocultar.
> Em 01/09/2026 foi decidido não realizar verificação humana nem revisão em
> pares. Com essa restrição, o projeto não produzirá gabarito confirmatório
> independente; avaliações futuras serão rotuladas como técnicas ou por proxy.

## Resposta curta sobre a escolha do modelo

O modelo operacional atual é `local-hybrid-v1.8.0`: Granite Embedding 97M
Multilingual R2 + TF-IDF + classificador linear calibrado. A escolha de
embedding semântico é tecnicamente plausível porque chamados equivalentes podem
usar palavras diferentes; o TF-IDF preserva sinais lexicais exatos, enquanto o
embedding representa proximidade semântica. A fusão híbrida é uma hipótese de
engenharia que precisa vencer as ablações no corpus do próprio domínio.

O repositório contém um protocolo comparativo para:

- Granite 97M, multilingual-e5-small e
  paraphrase-multilingual-MiniLM-L12-v2;
- TF-IDF isolado, embedding isolado, híbrido, metadados e
  híbrido+metadados;
- regressão logística, árvore de decisão, SVM linear, MLP e XGBoost;
- validação cruzada aninhada e agrupada, calibração, comparações pareadas,
  benchmark de latência e SHAP.

A execução antiga dessa comparação foi invalidada em auditoria: ela tratava
paráfrases derivadas do mesmo molde como grupos independentes e seu corpus
congelado não era reproduzível pelo SHA-256 disponível. Os números antigos
permanecem apenas como trilha histórica em
[`INVALIDADO.md`](avaliacao/resultados/selecao-supervisionada-v2/INVALIDADO.md).
O protocolo 2.1 corrigiu o agrupamento por
`source_dependency_group_sha256` e foi executado novamente. As 35 configurações
de classificação terminaram e passaram em validação independente no escopo da
tarefa; as 55 de deduplicação foram bloqueadas porque seis grupos por classe
não comportam o desenho de ajuste+calibração. O candidato classificatório
provisório foi E5 + híbrido + SVM linear, com status `UNDERPOWERED`; isso não
autoriza trocar o bundle operacional.

## O que está comprovado hoje

- os seis workflows V9 são gerados a partir de builders, têm snapshots
  SHA-256, passaram na validação estática e foram publicados com paridade de
  lógica no n8n local;
- o E2E sintético isolado percorreu WF06 → WF02 → WF03, sem fallback, com
  cleanup e restauração completos; a rodada final aprovada está em
  `avaliacao/resultados/e2e-pipeline-local-v1.8.0-20260902-1950.json`;
- após o reparo, `ERRO_IA=0`, fila ativa `=0` e DLQ aberta `=0`; as 84 DLQs e
  129 estados históricos foram reconciliados sem apagar a trilha;
- n8n foi conferido autenticado no navegador em 02/09; o GLPI abriu na porta
  9180, mas a sessão havia expirado e o novo login ficou condicionado à
  confirmação de transmissão da senha;
- o serviço local carrega o bundle operacional congelado `v1.8.0`, Granite PyTorch FP32 de
  384 dimensões, sem fallback de embedding;
- a telemetria do WF06 agora exclui e põe em quarentena tickets pertencentes a
  experiências encerradas;
- segredos, bancos, backups, binários e caches locais foram retirados do
  versionamento.
- três janelas aceleradas por proxy foram concluídas sem vazamento de grupos;
  isso valida o mecanismo técnico, não disponibilidade longitudinal;
- a homologação sintética separada usa portas, redes, volumes e segredos
  próprios, sem copiar chamados reais.

Isso não permite dizer que “o n8n está 100% correto”. Testes demonstram os
casos exercitados; não provam correção para toda entrada, falha concorrente ou
dependência externa possível.

## Limite para uma conclusão científica

Como o projeto decidiu não realizar verificação humana nem revisão em pares,
não haverá gabarito independente elegível. Portanto, a conclusão confirmatória
fica bloqueada e nenhum conjunto atual deve ser chamado de holdout científico.
Ainda é possível ampliar as famílias independentes, congelar protocolo e
executar discriminação, calibração, risco-cobertura, subgrupos e erros críticos,
mas os resultados serão técnicos/de desenvolvimento por proxy.

Para ultrapassar esse limite seria necessário mudar a decisão de escopo,
coletar chamados institucionais autorizados, criar gabarito independente e só
então reservar e abrir uma única vez um holdout intocado.

## Versões dos workflows

Sim: o repositório conserva em `n8n/history/` as oito versões anteriores,
V1–V8, como snapshots públicos, inativos e sanitizados. São dez JSONs porque a
V8 já era dividida em três workflows. O manifesto registra origem e SHA-256, e
o validador confirmou cobertura V1–V8, determinismo e ausência dos padrões de
segredo/runtime verificados. Esses snapshots documentam evolução; não provam
que cada versão histórica era correta em produção. A V9 operacional fica em
`n8n/workflows/Versão9/`.

## Reprodução essencial

```powershell
# Infraestrutura
docker compose -f glpi/docker-compose.yml up -d
docker compose -f n8n/docker-compose.yml up -d

# Serviço local operacional congelado
./local_ai/scripts/start-local-ai.ps1 -CpuThreads 2 -MaxEmbedBatch 1

# Build, validação e publicação V9
python n8n/workflows/Versão9/validate_v9_static.py
python n8n/workflows/Versão9/deploy.py

# Testes
python -m pytest -q local_ai/tests avaliacao/tests
python -m pytest -q n8n/workflows/Versão9/test_v9_hard.py
python -m pytest -q n8n/history/tests
python n8n/history/validate_history.py --check-sources

# Regenerar o corpus corrigido e validar o protocolo/código
python avaliacao/scripts/gerar_corpus_desenvolvimento_local_v2.py
python -m pytest -q avaliacao/tests/test_selecao_modelos_supervisionados.py

# O protocolo integral deve falhar cedo enquanto a deduplicação tiver 12 grupos
python avaliacao/scripts/validar_viabilidade_protocolo_selecao.py `
  --config avaliacao/config/selecao_modelos_supervisionados_v2.json

# Validação independente da classificação concluída
python avaliacao/scripts/validar_resultados_selecao.py `
  --saida avaliacao/resultados/selecao-supervisionada-v2.1-20260826 `
  --config avaliacao/config/selecao_modelos_supervisionados_v2.json `
  --task classification
```

O E2E mutante exige confirmação explícita e um manifesto congelado; consulte
[`tutorial_reproducao_e_implantacao.md`](docs/tutorial_reproducao_e_implantacao.md).

## Documentos canônicos

- [Auditoria crítica completa de 2026-09-02](docs/auditoria_critica_completa_2026-09-02.md)
- [Auditoria crítica completa de 2026-09-01](docs/auditoria_critica_completa_2026-09-01.md)
- [Auditoria crítica completa de 2026-08-26](docs/auditoria_critica_completa_2026-08-26.md)
- [Resposta objetiva ao professor](docs/resposta_professor_2026-08-26.md)
- [Hierarquia de fontes de verdade](docs/SOURCE_OF_TRUTH.md)
- [Metodologia corrente de avaliação](avaliacao/metodologia_avaliacao_v2_1.md)
- [Guia de reprodução e implantação](docs/tutorial_reproducao_e_implantacao.md)
- [Resultados estatísticos e comparações](docs/resultados_estatisticos_e_comparativo_gemini.md)
- [Relatório de organização e limpeza](docs/relatorio_limpeza_2026-08-26.md)
- [Evolução arquitetural V1–V9](docs/evolucao_arquitetura_v1_v9.md)

`avaliacao/metodologia_avaliacao.md` e `docs/plano_avaliacao_cientifica_v3.md`
são snapshots históricos, não documentos canônicos atuais.

Resultados sintéticos e históricos devem sempre ser rotulados como tais. A
documentação narrativa nunca prevalece sobre manifests, hashes, dados brutos e
validação independente.
