# Diagnóstico de Validação Científica e Governança Metodológica

**Projeto:** Automação Inteligente de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Instituição de Referência:** IF Sudeste MG - Campus Rio Pomba  
**Data:** Agosto de 2026 (Revisão Alinhada aos Manifestos Oficiais)  
**Versão Operacional Congelada:** `local-hybrid-v1.8.0` (`local-hybrid-bundle-v1.8.0`)  
**Candidato Experimental:** `local-hybrid-v1.9.1` (em avaliação técnica)  

---

> [!IMPORTANT]
> **Aviso de Prevalência e Governança Científica:**  
> Este documento é derivado estritamente dos artefatos, manifests e logs de execução registrados no repositório. Em caso de qualquer divergência entre documentos narrativos e arquivos de controle estruturados, **os manifests imutáveis (`*.json`), os protocolos pré-registrados e os hashes SHA-256 prevalecem**.

---

## 1. Quadro Oficial de Estados da Evidência Científica

Em conformidade com as diretrizes metodológicas do projeto e os manifests congelados, a situação formal de cada dimensão experimental é:

| Dimensão de Evidência | Estado Metodológico Formal | Detalhamento Técnico e Governança |
|---|---|---|
| **Seleção Supervisionada Interna (OOF)** | ✅ **Concluída** | 90 configurações avaliadas sob validação cruzada 5-fold agrupada por núcleo semântico (1.114 registros elegíveis / 230 núcleos). |
| **Identificação de Candidato de Desenvolvimento** | ✅ **Identificado** | Classificação: `Híbrido (Granite 97M + TF-IDF) + Linear SVM` (Rank 1). Deduplicação: `Híbrido (Granite 97M + TF-IDF) + Logistic Regression` (Rank 5, *Post-hoc Engineering Override*). |
| **Validação Técnica e de Engenharia (V9)** | 🟡 **Avançada** | 913 asserções estáticas PASS, contratos de API intactos, orquestração n8n, idempotência, *advisory locks* e execução E2E de persistência comprovada. |
| **Validação Científica Confirmatória** | 🔴 **Pendente** | Exige novo holdout institucional intocado com gabarito duplo-cego adjudicado por especialistas humanos (`confirmatory_claim_allowed=false`). |

---

## 2. Esclarecimento Sobre Conjuntos Amostrais e Status de Holdout

### 2.1. O Corpus de Desenvolvimento Expandido (2.800 Registros Brutos)
O corpus sintético de desenvolvimento foi estruturado para mitigar o subdimensionamento amostral da fase piloto. Contudo, para fins de validação estatística formal:
* **Registros Brutos Gerados:** 2.800 casos sintéticos.
* **Amostra Efetiva de Classificação OOF:** **1.114 registros elegíveis** agrupados em **230 núcleos semânticos independentes** (as paráfrases de um mesmo núcleo permanecem estritamente na mesma dobra para evitar vazamento).
* **Amostra Efetiva de Deduplicação:** 1.000 pares contrastivos agrupados em 200 episódios.
* **Classificação Estatística do Candidato:** O relatório canônico registra que, sob o critério formal de poder estatístico estrito, os candidatos selecionados permanecem classificados como `UNDERPOWERED` para generalização fora da amostra, exigindo confirmação externa.

### 2.2. O Conjunto Reservado Exploratório (Histórico: `corpus_v3_teste`)
O conjunto de 700 unidades amostrais utilizado em execuções exploratórias anteriores possui as seguintes propriedades documentadas no seu manifesto (`corpus_v3_teste_manifest.json`):
* `labels_exposed: true` (rótulos conhecidos e expostos durante desenvolvimento e calibração de regras).
* `confirmatory_eligible: false` e `pilot_only: true`.
* **Conclusão Metodológica:** Esse conjunto **não constitui um holdout confirmatório independente**. Os resultados obtidos nele representam regressão técnica e verificação de pipeline, não evidência confirmatória imparcial.

---

## 3. Resultados da Seleção Supervisionada de Desenvolvimento (OOF)

Na validação cruzada 5-fold agrupada no corpus de desenvolvimento, o modelo híbrido campeão apresentou as seguintes estimativas pontuais:

### 3.1. Classificação em 4 Classes (OOF — 1.114 Registros Elegíveis / 230 Núcleos)
* **Macro-F1 OOF:** **0.9520** | **Acurácia Global OOF:** **95.51%**
* **Métricas por Classe Operacional:**
  * `OBRA`: F1 = 0.9739 (Precisão: 97.82%, Recall: 96.97%, Suporte: 231)
  * `DEMO`: F1 = 0.9610 (Precisão: 95.30%, Recall: 96.91%, Suporte: 356)
  * `SOB_DEMANDA`: F1 = 0.9557 (Precisão: 95.70%, Recall: 95.43%, Suporte: 350)
  * `TRIAGEM_MANUAL`: F1 = 0.9174 (Precisão: 92.53%, Recall: 90.96%, Suporte: 177)

### 3.2. Análise de Risco Assimétrico e Regra de Sucessão
* **Erro Crítico (Manutenção $\to$ OBRA):** Zero ocorrências observadas na amostra de 129 grupos expostos.
* **Intervalo de Confiança:** Pela Regra de Três / limite superior de Laplace para eventos com zero falhas em $n = 129$ unidades independentes, o Limite Superior de Confiança unilateral de 95% é **$\text{UCB}_{95} \approx \frac{3}{129} \approx 2.30\%$**. Não se infere probabilidade populacional nula.
* **Deduplicação de Chamados:** Zero falsos negativos observados no benchmark balanceado de pares (1.000 pares / 200 grupos; $\text{NPV}_{\text{amostral}} = 1.0000$; $\text{UCB}_{95} \approx 2.95\%$).

---

## 4. Avaliação Exploratória Reservada: Risk–Coverage e Abstenção

Na execução sobre as 700 unidades reservadas exploratórias, o comportamento operacional da política de abstenção conservadora foi:

* **Unidades Processadas:** 700 / 700 (100% de conformidade com contratos HTTP).
* **Abstenções Operacionais:** 642 unidades (91.71%).
* **Cobertura Seletiva (*Selective Coverage*):** **8.29%** (58 casos automatizados conclusivamente).
* **Acurácia Seletiva (*Selective Accuracy*):** **100.00%** (0 erros observados exclusivamente sobre a fração coberta).
* **Roteamento para Triagem Humana:** **92.29%** (646 chamados encaminhados ao fiscal por baixa confiança, limiares de segurança ou ambiguidade).
* **Automação Direta (*Straight-Through*):** **7.71%**.

> [!NOTE]
> **Interpretação para a Hipótese H4 (Redução de Carga de Trabalho):**  
> A alta acurácia seletiva (100%) decorre da extrema conservadorismo dos gates determinísticos. A demonstração formal de que o sistema reduz expressivamente o esforço humano no GLPI (H4) exige expandir a cobertura seletiva através de calibração empírica da curva *risk–coverage*, mantendo os limites toleráveis de risco.

---

## 5. Explicabilidade da IA (Atribuição de Atributos via SHAP)

A análise com `shap.LinearExplainer` sobre o modelo linear híbrido decompõe a contribuição relativa das famílias de preditores para o escore interno de decisão:
* **TF-IDF Caracteres (3 a 5-grams):** **46.57%** da magnitude média absoluta de atribuição.
* **Embedding Denso IBM Granite 97M:** **26.74%** da magnitude média de atribuição.
* **TF-IDF Palavras (Unigramas e Bigramas):** **26.69%** da magnitude média de atribuição.

> [!WARNING]
> **Interpretação Científica do SHAP:**  
> Os valores SHAP representam pesos de atribuição de atributos (*feature attribution*) na função de decisão do modelo estatístico treinado. Eles **não constituem inferência causal nem prova de causalidade** no fenômeno físico de abertura de chamados.

---

## 6. Deduplicação em Duas Etapas: Retrieval e Classificador de Pares

O pipeline de deduplicação opera estritamente em 2 estágios sequenciais:
1. **Recuperação de Candidatos (*Retrieval Top-K*):** Identificação dos $K$ chamados históricos mais próximos no espaço vetorial.
   * *Granite 97M:* Recall@1 = 19.0% | Recall@5 = 49.6% | **Recall@20 = 87.8%**
   * *TF-IDF:* Recall@1 = 32.4% | Recall@5 = 65.8% | **Recall@20 = 78.8%**
2. **Classificador de Pares (*Pairwise Decision*):** Decisão supervisionada e calibrada sobre o par $(c_{\text{novo}}, c_{\text{candidato}})$.

*Rigor Conceitual:* A taxa de falso negativo de deduplicação ponta-a-ponta (E2E) é dada pela composição do erro de recuperação com o erro do classificador de pares:
$$\text{Taxa FN}_{\text{E2E}} = (1 - \text{Recall@K}) + (\text{Recall@K} \times \text{Taxa FN}_{\text{classificador}})$$
Portanto, a ausência de falsos negativos no classificador de pares condicionado à presença da referência no Top-20 não implica ausência absoluta de perda de duplicidades pelo sistema global.

---

## 7. Requisitos Obrigatórios para Validação Científica Confirmatória Final

Para transicionar formalmente este projeto para o status de cientificamente validado, os seguintes passos metodológicos são mandatórios:
1. **Congelamento do Pré-Registro:** Fixação definitiva das hipóteses H1–H4, métrica primária (limite superior unilateral exato de Clopper-Pearson a 95% para erro crítico) e margem de não-inferência.
2. **Holdout Institucional Intocado:** Coleta e anonimização de chamados reais que **nunca tenham participado do treinamento, engenharia de regras ou ajuste de limiares**.
3. **Gabarito Humano Duplo-Cego:** Rotulagem independente por 2 especialistas, medição de concordância via $\kappa$ de Cohen e adjudicação formal das discordâncias por um terceiro especialista.
4. **Benchmark Pareado LOCAL × Gemini:** Execução estrita sobre exatamente os mesmos chamados, sem fallback, com penalização de falhas de transporte no denominador.
5. **Curvas Risk–Coverage e Estudo de Tempo e Movimento:** Medição do tempo real de atendimento assistido vs. manual para comprovação empírica de H4.

