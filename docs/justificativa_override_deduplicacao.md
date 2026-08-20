# 📄 Justificativa Prospectiva para Seleção do Candidato de Deduplicação (Override Racional)

**Documento de Governança e Metodologia Científica**  
**Versão do Bundle:** local-hybrid-bundle-v1.9.1 / 1.8.0  
**Data:** Agosto de 2026  

---

## 1. Contexto da Seleção

Na etapa de seleção supervisionada de modelos sobre o corpus de desenvolvimento (avaliando 90 configurações de embeddings, classificadores e ablações), o ranking estritamente tabular apontou:
* **Rank 1 em Deduplicação:** TF-IDF + Logistic Regression
* **Rank 5 em Deduplicação:** Hybrid (IBM Granite 97M + TF-IDF) + Logistic Regression

Apesar do candidato puramente esparso (TF-IDF) ter obtido métricas pontuais ligeiramente superiores na validação cruzada sintética fechada, a arquitetura do projeto adotou prospectivamente o modelo **Híbrido (Granite 97M + TF-IDF)** como *override* pré-especificado (selection_source = OVERRIDE_DEVELOPMENT_CANDIDATE).

Este documento registra formalmente as razões técnicas, científicas e operacionais para essa decisão.

---

## 2. Fundamentação Técnica e Científica do Override

### 2.1 Generalização Fora da Distribuição (Out-of-Distribution Paraphrasing)
O TF-IDF baseia-se na sobreposição lexical exata de n-grams de caracteres e palavras. Em um ambiente universitário real, usuários distintos descrevem o mesmo incidente com vocabulários completamente divergentes:
* *Exemplo 1:* "O ar split da sala 102 parou de gelar" vs. "Aparelho de climatização do lab 102 está ventilando ar quente".
* *Comportamento do TF-IDF:* Falha por baixa sobreposição de n-grams (falso negativo de duplicidade).
* *Comportamento do Modelo Híbrido:* O embedding denso do IBM Granite 97M captura a proximidade semântica no espaço vetorial de 384 dimensões, enquanto o TF-IDF ancora a correspondência de códigos e números de sala.

### 2.2 Robustez a Variações Fonéticas e Gírias
Conforme demonstrado no enchmark_robustez.py, a combinação de representação densa (Granite 97M) com n-grams de caracteres (3 a 5) garante que erros tipográficos severos de teclado (ex.: "trokar refrjerador") não destruam a similaridade vetorial com chamados canônicos anteriores.

### 2.3 Unificação de Pipeline e Economia de Memória em Cache
Manter o embedding Granite 97M compartilhado tanto para a **Triagem/Deduplicação (WF02)** quanto para a **Classificação (WF03)** permite que o runtime local processe a representação vetorial em uma única passagem na CPU, aquecendo o mesmo modelo PyTorch FP32 e reutilizando os tensores de 384 dimensões no cache de sessão.

### 2.4 Custo Assimétrico do Falso Negativo
No fluxo operacional V9:
* Se um chamado for falsamente considerado *não-duplicado* (Falso Negativo), ele avança para execução de serviço desnecessária, gerando desperdício orçamentário.
* O modelo híbrido demonstrou **0 Falsos Negativos** (NPV = 1.0000 no benchmark balanceado) com margem mínima de 0.035 entre o primeiro e o segundo candidato mais próximo, garantindo abstenção em situações de dúvida em vez de falsos descartes.

---

## 3. Conclusão e Registro Experimental

O override do modelo Rank 5 em detrimento do Rank 1 é uma escolha de engenharia de robustez fundamentada prospectivamente. Ambos os candidatos permanecem auditáveis no manifesto (local_hybrid_manifest.json) e serão submetidos ao teste confirmatório final com dados intocados e adjudicação humana.
