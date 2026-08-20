# Relatório de testes — 16/07/2026

> **RELATÓRIO HISTÓRICO.** Descreve a revisão executada em 16/07/2026. Os três
> tickets E2E e a auditoria de deploy abaixo não validam automaticamente os
> JSONs modificados depois dessa data. Para a revisão corrente, consulte
> `../n8n/workflows/Versão9/TEST_REPORT.md`: em 12/08 foram observados 913
> checks estáticos, nove contratos e preflight sem mutação; o E2E mutante
> integral e a calibração isolada válida do WF06 continuam pendentes.

## Situação

A revisão V9 daquela data era uma candidata de release de engenharia. Os seis workflows foram
regenerados, validados e implantados no ambiente local; o serviço local v1.8
processou o corpus de desenvolvimento sem falhas; e o fluxo integrado GLPI,
fila, n8n, PostgreSQL e confirmação fiscal foi percorrido. A eficácia para o
artigo continua não confirmada porque o holdout independente e os rótulos
humanos/adjudicados ainda não foram executados.

## Suítes

| Verificação | Resultado observado |
|---|---:|
| Testes `local_ai` | 56 aprovados |
| Testes `avaliacao` | 79 aprovados e 18 subtestes |
| Validador estático V9 | aprovado |
| Workflows ativos no n8n | 6/6 |
| Interface web somente leitura | 12/12 verificações |
| Integração sintética final | 3/3 tickets concluídos |

Inventário: WF01 16 nós, WF02 43, WF03 38, WF04 42, WF05 15 e
WF06 18. Total: 172 nós, dos quais 48 são nós `Code`.

## Modelo local

A v1.1 e a v1.8 foram executadas sobre os mesmos 1.240 `unit_id` e o mesmo
conteúdo canônico. A v1.1 teve 1.045 falhas, principalmente HTTP 429 do serviço
local; por isso sua acurácia seletiva de 100% descreve apenas as 87 decisões
semanticamente cobertas. Dessas, 73 seguiram sem intervenção humana. A v1.8
processou todos os itens.

| Métrica | v1.1 | v1.8 |
|---|---:|---:|
| Total | 1.240 | 1.240 |
| Respostas válidas | 195 | 1.240 |
| Falhas | 1.045 | 0 |
| Cobertura semântica | 7,02% | 54,11% |
| Acurácia seletiva | 100%* | 99,70% |
| Sem intervenção humana | 5,89% | 40,73% |
| Latência média válida | 1.245,7 ms | 414,3 ms |
| p95 válido | 4.384,3 ms | 838,1 ms |
| FP/FN automáticos de deduplicação | 0/0* | 0/0 |

`*` Métrica condicionada a uma fração pequena e não comparável de respostas.

Na v1.8, classificação teve cobertura semântica de 71,56%, acurácia seletiva
de 99,56%, 182 abstenções operacionais e 57 predições semânticas
`TRIAGEM_MANUAL`. Ao todo, 239/640 casos seguiram para humano. Não houve
encaminhamento automático de manutenção para OBRA. Deduplicação teve cobertura
de 35,5%, acurácia seletiva de 100%, 387 abstenções, 0 FP e 0 FN automáticos;
496/600 rotas exigiram humano, incluindo 109 confirmações de duplicidade. Tudo
isso pertence ao desenvolvimento sintético.

No agregado, `TRIAGEM_MANUAL` é uma classe semântica e `ABSTENCAO` é um estado
operacional: elas não são somadas como se fossem a mesma coisa. Foram 569
abstenções operacionais, 57 predições `TRIAGEM_MANUAL`, 735 rotas humanas e
505/1.240 itens sem intervenção humana.

## Gemini e DeepSeek

O pareado histórico com Gemini 3.1 Flash Lite teve 71/140 respostas válidas,
69 falhas, cobertura de 44,29%, acurácia seletiva de 93,55% e um falso
positivo. Ele comparou uma versão local antiga e não sustenta a comparação da
v1.8.

O primeiro ensaio da v1.8 com Gemini 3.5 Flash foi rejeitado: o Gemini teve
0/140 respostas válidas, com 116 respostas 429, 22 respostas 503 e dois
timeouts. A mensagem da API indicou um limite observado de 5 RPM naquele
projeto, tier e instante; esse valor não é uma cota permanente.

Uma nova tentativa foi planejada para 40 unidades e 4 RPM. Nesta sessão, a
política de rede do ambiente bloqueou os 40 sockets antes de qualquer resposta
do provedor; portanto ela consumiu zero tokens reportados e não é comparação de
eficácia. O lado local foi repetido separadamente, sem API: 40/40 válidos,
cobertura de 40%, acurácia seletiva de 100%, 0 FP e 0 FN. Essas unidades não
devem ser pareadas com as tentativas bloqueadas como se fossem respostas Gemini.

O DeepSeek retornou HTTP 402 por saldo insuficiente no diagnóstico anterior.
Não existe amostra válida para comparar sua eficácia.

Decisão operacional: `LOCAL,SECONDARY`, sendo o secundário
`gemini-3.5-flash`. Gemini 2.5, Gemini 3.1 e DeepSeek foram removidos da
sequência operacional. O suporte de adaptador permanece no código para
reprodutibilidade histórica, mas não é chamado pela configuração vigente.

## Integração e links

Execução `VALIDACAO-20260716T145412`, sintética e não confirmatória:

- ticket 251: deduplicação incerta, encaminhado para triagem manual;
- ticket 252: possível duplicado, confirmação automática percorreu o link real,
  recebeu HTTP 202 no endpoint de decisão e terminou `DUPLICADO_FECHADO`;
- ticket 253: classificado `SOB_DEMANDA` e terminou
  `ENCAMINHADO_PLANEJADO`.

O link negativo foi validado separadamente no ticket sintético 249, sem
cabeçalhos do oráculo. O WF04 recebeu `nao_duplicado`, respondeu HTTP 202,
removeu a duplicidade, gravou `REJEITOU_DUP` e reenfileirou a classificação.
Os eventos `LINK_FORMATO_VALIDO_FISCAL_GLPI`, `DECISAO_REJEITAR` e
`DUPLICIDADE_REJEITADA` ficaram auditados.

Depois dessa integração, os links humanos foram endurecidos em duas etapas.
`GET /webhook/fiscal-confirmacao-v9` e
`GET /webhook/avaliacao-humana-confirmacao-v9` apenas renderizam uma página
HTML com formulário; os endpoints de mutação aceitam somente `POST`. Em
16/07/2026, as duas páginas retornaram HTTP 200, `text/html` e formulário
`POST`; entradas artificiais inválidas nos endpoints de mutação falharam sem
alterar chamado. A prova anterior de fechamento/rejeição continua válida para
as transições, mas antecede esse endurecimento de interface.

## Limites antes do artigo

- executar uma única avaliação confirmatória no holdout congelado;
- obter rótulos humanos/adjudicados independentes para a amostra definida;
- repetir a comparação v1.8 versus Gemini quando a rede e a cota real da conta
  estiverem disponíveis;
- concluir a calibração comparativa de vazão do WF06. O valor atual, lote 3 e
  intervalo 45 s, é conservador e passou na integração, mas ainda não é um
  ótimo demonstrado experimentalmente.

Não é correto afirmar que o modelo local superou o Gemini em eficácia. É correto
afirmar que a v1.8 superou a v1.1 em disponibilidade, cobertura e latência no
desenvolvimento e que, no ambiente testado, foi operacionalmente mais estável
que as APIs remotas observadas.
