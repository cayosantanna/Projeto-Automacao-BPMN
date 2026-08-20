# 📄 Justificativa de Engenharia para Seleção do Candidato de Deduplicação (Post-Hoc Override)

**Documento de Governança e Metodologia Científica**  
**Versão do Bundle:** `local-hybrid-bundle-v1.9.1` / `v1.8.0`  
**Classificação Metodológica:** `selection_source = POST_HOC_ENGINEERING_OVERRIDE`  
**Data:** Agosto de 2026  

---

## 1. Contexto da Seleção e Transparência Metodológica

Na etapa de seleção supervisionada de modelos sobre o corpus de desenvolvimento (avaliando 90 configurações de embeddings, classificadores e ablações), o ranking estritamente tabular apontou:
* **Rank 1 em Deduplicação:** `TF-IDF + Logistic Regression`
* **Rank 5 em Deduplicação:** `Hybrid (IBM Granite 97M + TF-IDF) + Logistic Regression`

O modelo operacional adotado **não corresponde ao primeiro colocado estatístico do ranking automatizado**. Aplicou-se um **override de engenharia (*Post-Hoc Engineering Override*)**, motivado por critérios de robustez fora da distribuição e unificação arquitetural. 

> [!IMPORTANT]
> **Transparência Científica:**  
> Por ter sido formalizado após a observação dos rankings preliminares, este override é tratado formalmente como uma decisão de engenharia *post-hoc*, cuja eficácia definitiva será submetida ao teste confirmatório independente com dados intocados.

---

## 2. Fundamentação Técnica da Decisão de Engenharia

### 2.1 Generalização Fora da Distribuição (Paráfrases não Previstas)
O TF-IDF baseia-se na sobreposição lexical de n-grams de caracteres e palavras. Em ambiente universitário real:
* *Exemplo:* "O ar split da sala 102 parou de gelar" vs. "Aparelho de climatização do lab 102 está ventilando ar quente".
* *Vulnerabilidade do TF-IDF:* Falha por baixa sobreposição de n-grams quando os termos variam.
* *Comportamento do Modelo Híbrido:* O embedding denso do IBM Granite 97M captura a proximidade semântica no espaço vetorial de 384 dimensões, enquanto o TF-IDF ancora a correspondência de códigos e números de sala.

### 2.2 Robustez a Variações Fonéticas e Ruído de Digitação
Conforme demonstrado no `benchmark_robustez.py`, a combinação de representação densa (Granite 97M) com n-grams de caracteres (3 a 5) garante que perturbações tipográficas severas não destruam a similaridade vetorial com chamados canônicos anteriores.

### 2.3 Unificação de Pipeline e Compartilhamento de Memória
Manter o embedding Granite 97M compartilhado tanto para a **Triagem/Deduplicação (WF02)** quanto para a **Classificação (WF03)** permite que o runtime local processe a representação vetorial em uma única passagem na CPU, aquecendo o mesmo modelo PyTorch FP32 e reutilizando os tensores de 384 dimensões no cache de sessão.

---

## 3. Conclusão

O modelo híbrido permanece documentado no manifesto como o bundle vigente da v1.8.0 / v1.9.1 e terá sua generalização avaliada de forma independente no holdout final.
