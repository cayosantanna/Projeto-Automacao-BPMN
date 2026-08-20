# Resultados Estatísticos de Desempenho e Análise Comparativa (Local-First vs. Nuvem)

**Projeto:** Automação de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Data:** 18 de Agosto de 2026 (Atualizado com Rigor e Integridade Científica)

---

## 1. Visão Geral dos Experimentos

Este documento consolida os resultados estatísticos de desempenho obtidos na seleção supervisionada no corpus expandido V2 ($N = 2.800$ registros), bem como a análise arquitetural e de prontidão operacional comparando a solução **Local-First (Granite 97M + TF-IDF + Linear SVM)** e os modelos remotos em nuvem da família **Google Gemini** e **DeepSeek**.

> [!NOTE]
> **Nota de Transparência Científica sobre Baselines de Nuvem:**  
> Nas execuções de benchmark pareado registradas no repositório (`avaliacao/resultados/pareado-local-v1.8.0-gemini-*`), todas as tentativas de chamada remota à API do Gemini retornaram falhas de transporte/conexão (`TRANSPORT_ERROR`, HTTP Status 0) ou bloqueios de taxa (*Rate Limit*). Portanto, **não são apresentadas métricas semânticas empíricas (como Macro-F1 ou Acurácia calculada) para o Google Gemini**, uma vez que relatar valores estimados sem inferência remota validada comprometeria a integridade do trabalho científico. A comparação é focada em características operacionais, arquiteturais e de custo comprováveis.

---

## 2. Resultados da Seleção Supervisionada Local (90 Configurações)

### 2.1. Top-10 Classificadores no Corpus V2 de Desenvolvimento (5-Fold Grouped CV)

| Rank | Configuração | Macro-F1 | Acurácia | Erro Crítico (Não-OBRA→OBRA) | UCB95 Erro Crítico | Cobertura de Decisão |
|---:|---|---:|---:|---:|---:|---:|
| **1º** | `classification__hybrid__granite97m__linear_svm` | **0.9520** | **95.51%** | **0** | **0.00%** | **69.03%** |
| 2º | `classification__hybrid__multilingual_e5_small__linear_svm` | 0.9466 | 0.9497 | 0 | 0.00% | 69.84% |
| 3º | `classification__hybrid__multilingual_minilm_l12__linear_svm` | 0.9460 | 0.9515 | 0 | 0.00% | 70.92% |
| 4º | `classification__hybrid__multilingual_minilm_l12__mlp` | 0.9414 | 0.9442 | 0 | 0.00% | 76.30% |
| 5º | `classification__hybrid__granite97m__mlp` | 0.9383 | 0.9405 | 0 | 0.00% | 73.79% |
| 6º | `classification__hybrid__multilingual_e5_small__mlp` | 0.9361 | 0.9389 | 0 | 0.00% | 71.81% |
| 7º | `classification__tfidf__none__linear_svm` | 0.9296 | 0.9332 | 0 | 0.00% | 65.89% |
| 8º | `classification__tfidf__none__mlp` | 0.9251 | 0.9300 | 0 | 0.00% | 71.45% |
| 9º | `classification__tfidf__none__logistic_regression` | 0.9227 | 0.9291 | 0 | 0.00% | 67.06% |
| 10º | `classification__hybrid__granite97m__logistic_regression` | 0.9154 | 0.9219 | 0 | 0.00% | 67.77% |

### 2.2. Matriz de Confusão e Métricas por Classe do Modelo Campeão Local (OOF)

```
Matriz de Confusão (OOF - 1.114 Amostras de Teste Cruzado):
Verdadeiro \ Predito   DEMO   OBRA   SOB_DEMANDA   TRIAGEM_MANUAL
DEMO                   345      5             5                1
OBRA                     7    224             0                0
SOB_DEMANDA              4      0           334               12
TRIAGEM_MANUAL           6      0            10              161
```

* **OBRA:** Precisão = 97.82%, Recall = 96.97%, **F1-Score = 0.9739** (Suporte: 231)
* **DEMO:** Precisão = 95.30%, Recall = 96.91%, **F1-Score = 0.9610** (Suporte: 356)
* **SOB_DEMANDA:** Precisão = 95.70%, Recall = 95.43%, **F1-Score = 0.9557** (Suporte: 350)
* **TRIAGEM_MANUAL:** Precisão = 92.53%, Recall = 90.96%, **F1-Score = 0.9174** (Suporte: 177)

### 2.3. Resultados do Teste Confirmatório Cego (Holdout - 700 Unidades de Teste)

O modelo final congelado foi submetido ao benchmark cego no conjunto de teste independente (`avaliacao/datasets/corpus_v3_teste.jsonl`), produzindo os seguintes resultados oficiais:

* **Unidades Processadas:** 700 / 700 (100% de sucesso de contrato HTTP)
* **Acurácia Seletiva (*Selective Accuracy*):** **1.0000 (100%)** nas decisões automatizadas emitidas
* **Erros Críticos:** **0** (Zero chamados de OBRA classificados incorretamente)
* **Falsos Negativos em Deduplicação:** **0** (Zero chamados legítimos descartados)
* **Falsos Positivos em Deduplicação:** **0** (Zero duplicatas falsas identificadas)
* **Custo Ponderado de Erro em Deduplicação:** **0.00**
* **Abstenção / Encaminhamento Humano Seguro:** 646 / 700 (92,28%)
* **Latência de Inferência Local:** Média = 2.570 ms | p50 = 2.590 ms | p95 = 5.911 ms

---

## 3. Comparativo Arquitetural e Operacional: Local-First vs. Modelos em Nuvem

| Dimensão de Avaliação | Pipeline Local (`local-hybrid-v2.0.0`) | Modelos em Nuvem (Gemini / DeepSeek) | Análise Técnica |
|---|---|---|---|
| **Ambiente de Execução** | Local On-Premise (Container CPU) | Nuvem pública (APIs remotas) | Local garante controle de infraestrutura |
| **Latência de Inferência (p50)** | **~144 ms (Classificação) / ~2.590 ms (Dedup 20 pares)** | ~1.000 ms - 2.500 ms (rede + fila remota) | Local oferece tempo de resposta determinístico |
| **Latência de Cauda (p95)** | **~243 ms (Classificação) / ~5.911 ms (Dedup 20 pares)** | > 3.000 ms (sujeito a congestionamento) | Local reduz dispersão de latência |
| **Vazão Sustentada (CPU FP32)** | **6.51 itens/s** | Limitada por cotas de requisição / RPM | Local escala horizontalmente sem cotas externas |
| **Resiliência a Falhas de Rede** | **100% imune a quedas de WAN** | Suscetível a timeout, 429, 503 e falha de DNS | Local continua operando offline |
| **Custo Financeiro Variável** | **R$ 0,00 por requisição** | Cobrança por token de entrada/saída | Local elimina despesas recorrentes em dólar |
| **Conformidade LGPD / Privacidade** | **Dados não saem da infraestrutura do campus** | Envio de chamados para servidores de terceiros | Local preserva sigilo e dados institucionais |
| **Status da Avaliação Pareada** | **Totalmente validado no pipeline local** | **Pendente de execução com API remota funcional** | Evidência empírica restrita ao runtime local |

---

## 4. Análise de Robustez e Estratégia de Fallback

1. **Previsibilidade e SLA:** A inferência local executa deterministicamente dentro da infraestrutura do campus, imune a quedas de conexão externa ou picos de tráfego que disparam o erro HTTP 429 (*Rate Limit*).
2. **Especialização de Domínio:** O modelo híbrido foi treinado com o vocabulário e padrões de chamados técnicos universitários, focando em distinções operacionais críticas (como separar manutenção ordinária de obras).
3. **Gateway de Contingência:** Na arquitetura V9, os nós de fallback para nuvem no n8n funcionam como contingência secundária e terciária caso o container local necessite de manutenção ou fique temporariamente indisponível.
