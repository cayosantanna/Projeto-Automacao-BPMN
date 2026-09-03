# Relatório de validação — atualizado em 02/09/2026

## Resultado final de 02/09

- E2E sintético final: `passed=true`, WF06→WF02→WF03, paridade dos três
  workflows e cleanup completo;
- estado pós-E2E: zero `ERRO_IA`, zero fila ativa e zero DLQ aberta;
- homologação isolada: nove serviços saudáveis, zero tickets copiados e role
  PostgreSQL runtime sem privilégios administrativos;
- três janelas proxy aceleradas: 372/371/371 registros, 37 grupos disjuntos em
  cada janela e drift técnico PASS;
- histórico V1–V8: 10 JSONs, cobertura integral e hashes válidos;
- n8n autenticado no navegador; sessão do GLPI expirada, aguardando confirmação
  imediata antes de transmitir a senha no novo login;
- resultados são técnicos/de desenvolvimento por proxy; não confirmam
  semântica nem disponibilidade longitudinal.

## Resultado executado

| Verificação | Resultado |
|---|---:|
| suíte hermética `local_ai` + `avaliacao` + V9 + histórico | 339 aprovados, 3 ignorados e 117 subtestes aprovados |
| testes unitários/contratuais do protocolo V2.1 | 23 aprovados |
| seleção classificatória V2.1 | 35 configurações, 175 dobras, 38.990 predições OOF; `VALID_PARTIAL_TASK_SCOPE` |
| seleção de deduplicação V2.1 | bloqueada: 55 configurações `FAILED` antes do ajuste por insuficiência de grupos |
| smokes live seguros | 3 aprovados |
| contratos V9 focados | 9 aprovados |
| histórico público V1–V8 | 8 testes e 10 subtestes aprovados |
| validação estática V9 | aprovada |
| gate regex documental limitado | aprovado nos arquivos/padrões configurados; não substitui auditoria semântica |
| validação histórica `--check-sources` | aprovada, 10 JSONs cobrindo V1–V8 |
| `git diff --check` | aprovado |

## E2E histórico de 26/08

Artefato:
`../avaliacao/resultados/e2e-pipeline-local-v1-20260826-final.json`

- `run_id`: `VALIDACAO-WF06-E2E-20260826T223056234436Z`;
- natureza: técnica, sintética e não confirmatória;
- WF06 → WF02 → WF03;
- terminal `TRIAGEM_MANUAL`;
- duas reservas, duas decisões e duas tentativas;
- DLQ zero, sem fallback e sem interferência estranha;
- paridade do WF06 final e hash `dc78c11...14a0`;
- purge GLPI, limpeza do banco e restauração de controlador/runtime completos.

## Navegador

> As observações abaixo são o snapshot autenticado de 26–27/08. Em 01/09 as
> interfaces foram abertas novamente, mas ambas permaneceram na tela de login;
> não houve nova inspeção autenticada de workflows, execuções ou chamados.

- os seis workflows V9 apareceram como `Published` após a restauração dos
  serviços em 27/08/2026;
- `V9 - WF06 Fila IA` permaneceu publicado, com os nós esperados de ingresso,
  reserva, lote, pacing e despacho a WF02/WF03;
- a execução manual de 26/08 mostrou “Workflow executed successfully”; execução
  `52143`: `Succeeded` em 123 ms;
- após reinício e rotação do token local, as execuções agendadas `52145` a
  `52153` também apareceram como `Succeeded`; a mais recente, `52153`, levou
  130 ms;
- GLPI 230: `Novo → Pendente → Em atendimento (atribuído)`, correção de
  categoria e acompanhamentos;
- GLPI 266: permaneceu `Novo`, com apenas criação, enquanto a fila o marcou
  fora da elegibilidade por experiência encerrada no PostgreSQL. A tela do
  GLPI comprova apenas o estado/histórico visível, não a quarentena interna.

As telas foram observadas em sessões locais autenticadas em 26 e 27/08/2026.
Elas não foram incorporadas ao repositório como evidência imutável; a prova
durável do E2E é o artefato JSON identificado acima.

## Interpretação

Esses resultados demonstram regressão técnica e integração nos cenários
exercitados. Não medem acurácia institucional, não cobrem todas as falhas
concorrentes e não autorizam “100% correto”. A classificação comparativa foi
concluída apenas em desenvolvimento sintético; a deduplicação e o holdout
humano permanecem etapas separadas e pendentes.

O relatório histórico detalhado de contratos WF04/WF05 permanece em
`../n8n/workflows/Versão9/TEST_REPORT.md`.

## Atualização operacional de 01/09

- n8n recebeu healthcheck e foi observado `running healthy`;
- WF05 deixou de executar DDL no runtime e foi republicado;
- os seis workflows foram relidos após o deploy e tiveram paridade de lógica;
- carga classificatória híbrida: 40/40 HTTP 200 com concorrência 1; com
  concorrência 4, 18/40 HTTP 200 e 22/40 HTTP 429;
- as 20 execuções mais recentes eram sucessos do agendador WF06, porém sem
  decisões de IA novas; isso não equivale a E2E;
- existem 84 DLQs históricas não resolvidas, sem novas entradas nas últimas
  24 horas. O backlog precisa ser classificado antes de um SLO corrente.
