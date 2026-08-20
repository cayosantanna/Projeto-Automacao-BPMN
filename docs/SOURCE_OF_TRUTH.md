# 🏛️ Hierarquia Oficial das Fontes de Verdade (Source of Truth)

**Projeto:** Automação de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Governança Metodológica:** IF Sudeste MG - Campus Rio Pomba  

---

Para garantir integridade metodológica e impedir que afirmações narrativas entrem em conflito com as evidências executadas, este projeto adota uma **hierarquia estrita de fontes de verdade**:

| Prioridade | Nível de Autoridade | Descrição dos Artefatos | Regra de Resolução de Conflitos |
|---:|---|---|---|
| **1 (Suprema)** | **Manifests e Resultados Imutáveis com SHA-256** | manifesto_modelo_prompts.json, local_hybrid_manifest.json, esultado.json, tabelas ia_decisoes e ia_tentativas_modelo. | Se qualquer texto divergir de um manifest/hash congelado, **o manifest prevalece incondicionalmente**. |
| **2** | **Protocolos Pré-Registrados e Planos Amostrais** | PRE_REGISTRO_PENDENTE.md, PROTOCOLO_SELECAO_MODELOS_V1.md. | Define critérios a priori, desfechos primários e regras de cálculo antes da observação de dados. |
| **3** | **Relatórios Gerados Automaticamente por Código** | outputs/benchmark_robustez_relatorio.json, diagnósticos gerados por scripts. | Dados agregados extraídos diretamente dos logs e bancos de auditoria. |
| **4** | **Documentação Narrativa e README** | README.md, DEPLOYMENT_AND_VALIDATION_V9.md, docs/*.md. | Explicação humana e guias operacionais que devem refletir estritamente os níveis 1, 2 e 3. |
| **5** | **Material Histórico e Legado** | docs/historico/, ackups/workflows/. | Registros preservados para fins de rastreabilidade e histórico de engenharia. |

---

## 📜 Regras de Não-Contradição Científica
1. Se manifest.scientifically_validated == false, nenhum documento pode afirmar que a validação científica está concluída.
2. Se confirmatory_claim_allowed == false, nenhum resultado desse conjunto pode ser reportado como holdout confirmatório.
3. Se o número de eventos críticos for zero ( = 0$), o risco deve ser reportado pelo Limite Superior de Confiança ($\text{UCB}_{95}$), nunca como risco nulo ($\text{UCB} = 0\%$).
4. A acurácia calculada sobre subconjunto filtrado por abstenção deve ser explicitamente denominada **Acurácia Seletiva** (*Selective Accuracy*) e acompanhada da taxa de **Cobertura Seletiva** (*Selective Coverage*).
