
> **Registro histórico:** os números e diagnósticos abaixo pertencem a uma
> revisão anterior e podem estar superados. O protocolo atual está em
> `plano_avaliacao_cientifica_v3.md`, o rastreio implementado em
> `rastreio_completo_workflows_v9.md` e o fechamento técnico em
> `TEST_REPORT.md`.

## Diagnóstico da Situação Corrente na revisão original

O sistema está num **gate operacional legítimo**:
Bloqueio de 14 tickets operacionais na fila, a causa é a drenagem em andamento, nenhum apagado, estado:`require_quiescent_queue()` bloqueia corretamente 
Bloqueio de 94 rótulos pendentes é causada pela CSV `validacao_rotulos_piloto_v2.csv` com **todas** as colunas de revisão vazias, o estado é: especialistas ainda não preencheram.
O bloqueio da Calibração bloqueada é causada pela fila não-vazia → impossível calibrar, o estado é: comportamento intencional anti-contaminação.

> [!IMPORTANT]
> O bloqueio é **operacional**, não de código. Todas as correções críticas do Melhorias.txt e PlanoImplementação.txt foram implementadas. O projeto está tecnicamente maduro para rodar assim que os gates abrirem.


## Pendências Reais Restantes 
### 🟠 P1 — `response_schema` na API Gemini
**Status histórico daquela revisão:** WF02/WF03 passaram a usar nós Code do
gateway implantado no próprio n8n. Na época, o validador conferia os quatro
papéis `PRIMARY`, `SECONDARY`, `FREE_CONTINGENCY` e `TERTIARY`. A configuração
vigente foi depois reduzida a `LOCAL → SECONDARY`, com
`SECONDARY=gemini-3.5-flash`; os outros adaptadores permanecem somente para
reprodução histórica. Em benchmark, um único papel/modelo continua congelado e
não há fallback.


### 🟡 P2 — Few-shot examples nos prompts
**Status preparado:** O benchmark principal permanece zero-shot. O protocolo secundário em `avaliacao/experimentos/few_shot/README.md` exige exemplos vindos apenas do piloto adjudicado, nova versão de prompt/run e comparação pareada. Exemplos não foram inventados antes da revisão dos especialistas para evitar viés.

### 🟡 P3 — Cobertura de `DEMO_SEM_EQUIPE` no dataset
**Status corrigido na infraestrutura:** O perfil `DEMO_OFF` gera C02, C04 e C06 com classe esperada `DEMO_SEM_EQUIPE`. `executar_demo_off.py` recusa fila operacional não vazia, recria o n8n com `DEMO_EQUIPE_DISPONIVEL=false`, executa os casos e restaura `true` em bloco `finally`. A execução real continua pendente enquanto houver itens operacionais na fila.

### 🟡 P4 — Justificativa do limiar `IA_CONFIANCA_MINIMA=0.65`
**Status corrigido no protocolo:** `docs/limiar_confianca.md` declara 0,65 provisório. O próximo piloto deve usar 0,50; `calibrar_limiar.py` avalia 0,50–0,95 e recusa pontos abaixo do limiar efetivamente registrado no piloto. O benchmark só aceita o arquivo aprovado.

## Questão Pendente: "Código exterior ao n8n"
> "Se o autor optou por usar n8n por ser uma forma mais fácil de criar uma automação, por que parte da programação que deveria estar dentro da interface do n8n está sendo feita via código exterior a interface n8n?"

**Resposta incorporada em `docs/rastreio_completo_workflows_v9.md` e `avaliacao/metodologia_avaliacao.md`:**
> O n8n é a **engine de execução operacional** — os 6 workflows rodam 24/7, processam webhooks, chamam os provedores de IA e interagem com GLPI/PostgreSQL. Nenhum script Python de avaliação roda como decisor em produção.
> O código Python externo serve exclusivamente à **infraestrutura de pesquisa e CI/CD**: geração de datasets, validação estática, deploy automatizado, cálculo de métricas estatísticas e calibração. Os builders Python geram os JSONs que o n8n importa e executa. Esta separação é intencional: misturar lógica de pesquisa (bootstrap, McNemar, Kappa) dentro de nós do n8n seria impraticável e dificultaria a reprodutibilidade acadêmica.
