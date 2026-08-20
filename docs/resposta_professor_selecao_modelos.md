# Fundamentação Científica da Seleção de Modelos e Metodologia Experimental

> **Projeto:** Automação de Chamados GLPI com IA  
> **Protocolo:** Seleção Comparativa v1.3 (congelado em 12/08/2026)  
> **Status:** Seleção interna em corpus sintético de desenvolvimento — **NÃO CONFIRMATÓRIA**

---

## 1. Fundamentação Científica para o Uso de Embeddings Semânticos

### 1.1 Motivação

Em sistemas de triagem de chamados de manutenção patrimonial, as descrições
textuais apresentam alta variabilidade lexical: um mesmo problema pode ser
descrito de formas radicalmente diferentes ("torneira pingando", "vazamento no
ponto de água", "reparo hidráulico necessário"). Representações puramente
lexicais como TF-IDF capturam coincidências de vocabulário, mas falham quando
as palavras usadas são diferentes mas semanticamente equivalentes.

Sentence encoders projetam sentenças em vetores densos comparáveis por
similaridade cosseno, capturando relações semânticas que vão além da
coincidência lexical (Reimers e Gurevych, 2019).

### 1.2 Justificativa Empírica: Não Existe Embedding Universalmente Superior

O MTEB (Massive Text Embedding Benchmark) demonstrou que **nenhum modelo de
embedding domina todas as tarefas** (Muennighoff et al., 2023). Modelos que
lideram em recuperação podem ser inferiores em classificação ou clustering.
Por isso, resultados em benchmarks genéricos não garantem desempenho no
domínio específico de manutenção patrimonial universitária.

**Consequência metodológica:** a escolha final foi feita por avaliação empírica
no corpus do projeto, não por aceitação de rankings publicados.

### 1.3 Ablação: O Embedding Realmente Acrescenta Informação?

O protocolo contém **três ablações isoladas** para separar a contribuição
de cada representação:

| Ablação | O que mede |
|---|---|
| **TF-IDF isolado** | Sinal puramente lexical (tokens e n-grams de caracteres) |
| **Embedding isolado** | Sinal semântico denso, sem léxico |
| **Híbrido (TF-IDF + Embedding)** | Combinação dos dois sinais |
| **Metadados isolados** (deduplicação) | Local, categoria, solicitante, urgência, impacto |
| **Híbrido + Metadados** (deduplicação) | Todos os sinais combinados |

**Resultados da ablação — Classificação (Macro-F1 do melhor classificador por representação):**

| Representação | Melhor Macro-F1 | Melhor Classificador | Observação |
|---|---:|---|---|
| Híbrido (TF-IDF + Granite 97M) | **0.8006** | Linear SVM | Vencedor provisório |
| TF-IDF isolado | 0.7828 | Linear SVM | Baseline lexical forte |
| Embedding isolado (E5-small) | 0.7201 | Linear SVM | Inferior a TF-IDF isolado |
| Embedding isolado (MiniLM-L12) | 0.6888 | Linear SVM | Inferior a TF-IDF isolado |
| Embedding isolado (Granite 97M) | 0.6681 | Linear SVM | Inferior a TF-IDF isolado |

**Conclusão da ablação:** o embedding isolado é inferior ao TF-IDF isolado neste
corpus, mas a combinação híbrida (TF-IDF + embedding) **supera** o TF-IDF
isolado. Isso indica que o embedding acrescenta informação complementar quando
combinado com sinais lexicais.

---

## 2. Seleção Comparativa de Embeddings

### 2.1 Candidatos Avaliados

Todos são modelos abertos, multilíngues, com 384 dimensões e execução local em CPU:

| Modelo | Parâmetros | Justificativa de Inclusão | Revisão Congelada |
|---|---|---|---|
| **Granite 97M Multilingual R2** | 97M | Compacto, multilíngue, voltado a recuperação (IBM) | `835ad14...` |
| **multilingual-E5-small** | ~118M | Controle forte, aprendizagem contrastiva multilíngue | `614241f...` |
| **paraphrase-multilingual-MiniLM-L12-v2** | ~118M | Baseline amplamente usado, 50 idiomas | `e8f8c21...` |

### 2.2 Métricas de Recuperação Semântica

| Representação | Recall@1 | Recall@5 | Recall@20 | MRR | nDCG@20 |
|---|---:|---:|---:|---:|---:|
| TF-IDF | **35.3%** | **72.7%** | 79.7% | **0.499** | **0.564** |
| Granite 97M | 24.0% | 65.3% | **94.7%** | 0.421 | 0.540 |
| multilingual-E5-small | 29.0% | 61.0% | 84.3% | 0.438 | 0.527 |
| MiniLM-L12 | 11.7% | 29.0% | 57.7% | 0.216 | 0.289 |

**Observação:** TF-IDF lidera em precisão no topo (Recall@1), mas Granite 97M
domina em Recall@20, indicando melhor cobertura em distâncias semânticas maiores.

---

## 3. Algoritmos de Classificação Supervisionada

### 3.1 Classificadores Testados

| Classificador | Paradigma | Referência |
|---|---|---|
| **Regressão Logística** | Modelo linear probabilístico | Baseline interpretável |
| **Árvore de Decisão** | Regras por limiares | Interpretabilidade explícita |
| **SVM Linear** | Maximização de margem | Cortes e Vapnik (1995) |
| **MLP (Rede Neural Multicamadas)** | Aproximação universal | Hornik, Stinchcombe e White (1989) |
| **XGBoost** | Boosting com árvores | Chen e Guestrin (2016) |

### 3.2 Resultados Comparativos — Classificação (Top 10 por Macro-F1)

| Rank | Configuração | Macro-F1 | Evidência | Erros Críticos |
|---:|---|---:|---|---:|
| 1 | Híbrido Granite + **Linear SVM** | **0.8006** | UNDERPOWERED | 0 |
| 2 | Híbrido MiniLM + **Linear SVM** | 0.7920 | UNDERPOWERED | 0 |
| 3 | Híbrido MiniLM + **Regressão Logística** | 0.7448 | UNDERPOWERED | 0 |
| 4 | Híbrido MiniLM + **MLP** | 0.8028 | FAIL | 2 |
| 5 | Híbrido E5 + **Linear SVM** | 0.7877 | FAIL | 0 |
| 6 | TF-IDF + **Linear SVM** | 0.7828 | FAIL | 0 |
| 7 | Híbrido Granite + **Regressão Logística** | 0.7804 | FAIL | 1 |
| 8 | Híbrido Granite + **MLP** | 0.7708 | FAIL | 1 |
| 9 | Híbrido E5 + **Regressão Logística** | 0.7627 | FAIL | 0 |
| 10 | Híbrido E5 + **MLP** | 0.7602 | FAIL | 0 |

### 3.3 Métricas por Classe do Vencedor Provisório

| Classe | Precisão | Recall | F1 | Suporte |
|---|---:|---:|---:|---:|
| OBRA | 0.8732 | 0.9323 | **0.9018** | 133 |
| DEMO | 0.8255 | 0.7736 | **0.7987** | 159 |
| SOB_DEMANDA | 0.8851 | 0.9747 | **0.9277** | 158 |
| TRIAGEM_MANUAL | 0.6744 | 0.5000 | **0.5743** | 58 |

**Padrões de erro identificados:**
- DEMO → OBRA (15 confusões): demonstrativos confundidos com obras
- TRIAGEM_MANUAL → DEMO (12 confusões): casos ambíguos
- TRIAGEM_MANUAL → SOB_DEMANDA (11 confusões): fronteira imprecisa

### 3.4 Deduplicação

| Rank | Configuração | NPV | Falsos Negativos | Evidência |
|---:|---|---:|---:|---|
| 1 | Híbrido Granite + **Regressão Logística** | **1.0000** | 0 | UNDERPOWERED |
| 2 | Híbrido MiniLM + **Regressão Logística** | 1.0000 | 0 | UNDERPOWERED |
| 3 | Híbrido E5 + **Regressão Logística** | 1.0000 | 0 | UNDERPOWERED |

---

## 4. Explainable AI (XAI) com SHAP

O SHAP (SHapley Additive exPlanations — Lundberg e Lee, 2017) foi aplicado aos
dois vencedores provisórios usando `LinearExplainer`:

- **Classificação:** `hybrid__granite97m__linear_svm`
- **Deduplicação:** `hybrid__granite97m__logistic_regression`

### 4.1 Importância por Família de Atributos

| Família | Importância Média (|SHAP|) | Fração |
|---|---:|---:|
| **TF-IDF caracteres** | 1.0608 | **44.9%** |
| **Embedding** | 0.6600 | **28.0%** |
| **TF-IDF palavras** | 0.6396 | **27.1%** |

**Interpretação:** TF-IDF de caracteres (que captura abreviações e termos
técnicos de manutenção) contribui com 45% da importância. O embedding
contribui com 28% — confirmando sua utilidade complementar. Dimensões
individuais do embedding não recebem interpretação linguística (SHAP explica
associações, não causalidade).

---

## 5. Desempenho e Latência

| Tarefa | Cenário | p50 (ms) | p95 (ms) | Throughput | Pico RSS |
|---|---|---:|---:|---:|---:|
| Classificação | Texto bruto → predição | 115 | 135 | 9.2 itens/s | 925 MB |
| Deduplicação | Embedding em cache | 96 | 116 | 10.3 itens/s | 933 MB |
| Deduplicação | Sem cache | 141 | 187 | 6.9 itens/s | 935 MB |

---

## 6. Estado Atual do Treinamento

### 6.1 O que está concluído
- Seleção comparativa de desenvolvimento (90 configurações, 50.780 predições OOF)
- XAI/SHAP nos finalistas
- Benchmarks de latência
- Controles de vazamento de dados (agrupamento por núcleo narrativo)

### 6.2 O que está pendente
- **Poder estatístico insuficiente:** 32 núcleos/classe → todos UNDERPOWERED
- **Gabarito humano:** validação de rótulos por especialistas não executada
- **Holdout confirmatório:** corpus de teste bloqueado (confirmatory_eligible=false)
- **Re-execução com corpus expandido** (80 núcleos/classe) em andamento

### 6.3 Gates Científicos

| Gate | Exigência | Status |
|---|---|---|
| Rótulos humanos validados | Revisores independentes + adjudicador | PENDENTE |
| Poder estatístico para gates de confiança | ≥149 grupos/classe para margem 8% | INSUFICIENTE |
| Holdout confirmatório | Não usar corpus de teste na seleção | BLOQUEADO |
| Congelamento de hashes | Workflows, prompts, modelos, dataset | PENDENTE |

---

## 7. Referências Bibliográficas

- **Chen, T., & Guestrin, C. (2016).** XGBoost: A Scalable Tree Boosting System. *KDD '16*, 785–794. https://doi.org/10.1145/2939672.2939785
- **Cortes, C., & Vapnik, V. (1995).** Support-vector networks. *Machine Learning*, 20(3), 273–297. https://doi.org/10.1007/BF00994018
- **Hornik, K., Stinchcombe, M., & White, H. (1989).** Multilayer feedforward networks are universal approximators. *Neural Networks*, 2(5), 359–366. https://doi.org/10.1016/0893-6080(89)90020-8
- **Lundberg, S. M., & Lee, S.-I. (2017).** A Unified Approach to Interpreting Model Predictions. *NeurIPS 2017*. https://papers.neurips.cc/paper/2017/hash/8a20a8621978632d76c43dfd28b67767-Abstract.html
- **Muennighoff, N., et al. (2023).** MTEB: Massive Text Embedding Benchmark. *EACL 2023*. https://aclanthology.org/2023.eacl-main.148/
- **Reimers, N., & Gurevych, I. (2019).** Sentence-BERT: Sentence Embeddings using Siamese BERT-Networks. *EMNLP 2019*. https://aclanthology.org/D19-1410/
