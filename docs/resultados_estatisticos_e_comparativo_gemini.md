# Resultados Estatísticos de Desenvolvimento e Análise Comparativa de Arquitetura

**Projeto:** Automação de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Instituição de Referência:** IF Sudeste MG - Campus Rio Pomba  
**Data:** Agosto de 2026 (Revisão Alinhada aos Manifestos Oficiais)  
**Versão Operacional:** `local-hybrid-v1.8.0`  

---

> [!IMPORTANT]
> **Nota Metodológica Sobre o Comparativo com Modelos de Nuvem:**  
> A comparação confirmatória formal pareada entre o modelo **Local (IBM Granite 97M + TF-IDF)** e o **Google Gemini 3.5 Flash** **permanece formalmente pendente**. As execuções preliminares registradas no repositório sofreram falhas de transporte/conexão (`TRANSPORT_ERROR`) e não constituem uma bateria empírica concluída. Consequentemente, **não são declaradas superioridades semânticas (como "Local > Gemini" ou "7,8x mais rápido E2E")**, mantendo o compromisso estrito com a evidência auditável.

---

## 1. Resultados da Seleção Supervisionada de Desenvolvimento (OOF)

A seleção supervisionada no corpus expandido de desenvolvimento avaliou 90 configurações sob validação cruzada 5-fold agrupada por núcleo semântico (1.114 registros elegíveis / 230 núcleos):

### 1.1. Top-5 Classificadores no Corpus de Desenvolvimento
| Rank | Configuração de Representação e Algoritmo | Macro-F1 OOF | Acurácia Global OOF | Erro Crítico (Não-OBRA $\to$ OBRA) | $\text{UCB}_{95}$ Erro Crítico | Cobertura de Decisão |
|---:|---|---:|---:|---:|---:|---:|
| **1º** | `classification__hybrid__granite97m__linear_svm` | **0.9520** | **95.51%** | **0** | **$\le 2.30\%$** | **69.03%** |
| 2º | `classification__hybrid__multilingual_e5_small__linear_svm` | 0.9466 | 0.9497 | 0 | $\le 2.30\%$ | 69.84% |
| 3º | `classification__hybrid__multilingual_minilm_l12__linear_svm` | 0.9460 | 0.9515 | 0 | $\le 2.30\%$ | 70.92% |
| 4º | `classification__hybrid__multilingual_minilm_l12__mlp` | 0.9414 | 0.9442 | 0 | $\le 2.30\%$ | 76.30% |
| 5º | `classification__hybrid__granite97m__mlp` | 0.9383 | 0.9405 | 0 | $\le 2.30\%$ | 73.79% |

### 1.2. Matriz de Confusão OOF do Candidato Selecionado (1.114 Amostras Elegíveis)
```text
Verdadeiro \ Predito   DEMO   OBRA   SOB_DEMANDA   TRIAGEM_MANUAL
DEMO                   345      5             5                1
OBRA                     7    224             0                0
SOB_DEMANDA              4      0           334               12
TRIAGEM_MANUAL           6      0            10              161
```

* **OBRA (DDI/DG):** Precisão = 97.82%, Recall = 96.97%, **F1-Score = 0.9739** (Suporte: 231)
* **DEMO (Manutenção Interna):** Precisão = 95.30%, Recall = 96.91%, **F1-Score = 0.9610** (Suporte: 356)
* **SOB_DEMANDA (Terceirizados):** Precisão = 95.70%, Recall = 95.43%, **F1-Score = 0.9557** (Suporte: 350)
* **TRIAGEM_MANUAL (Abstenção):** Precisão = 92.53%, Recall = 90.96%, **F1-Score = 0.9174** (Suporte: 177)

---

## 2. Resultados da Avaliação Reservada Exploratória (700 Unidades)

No conjunto de avaliação exploratória reservada, os resultados do pipeline integrado foram:

* **Unidades Avaliadas:** 700 / 700 (100% de conformidade com schemas e contratos HTTP).
* **Cobertura Seletiva (*Selective Coverage*):** **8.29%** (58 casos concluídos automaticamente).
* **Acurácia Seletiva (*Selective Accuracy*):** **100.00%** (0 erros observados exclusivamente na fração coberta).
* **Encaminhamento Humano (Abstenção):** **92.29%** (646 casos roteados ao fiscal para validação manual).
* **Falsos Negativos de Deduplicação:** 0 observados no subconjunto processado ($\text{NPV}_{\text{amostral}} = 1.0000$, $\text{UCB}_{95} \approx 2.95\%$).

---

## 3. Discriminação e Decomposição de Latência

Para evitar comparações enganosas entre microbenchmarks e tempos de rede, a latência do sistema é reportada em 3 níveis distintos:

| Camada do Sistema | Métrica de Latência | Descrição do Escopo Medido |
|---|---|---|
| **1. Microbenchmark do Classificador Local** | **143.9 ms (mediana)** | Tempo puro de vetorização e inferência matricial na CPU (PyTorch FP32). |
| **2. Serviço REST `local_ai`** | **~414 ms (média) / 838 ms (p95)** | Validação de schemas JSON, execução de gates determinísticos, inferência e geração de proveniência. |
| **3. Pipeline E2E Integrado (GLPI $\to$ n8n $\to$ Postgres)** | **~2.570 ms (p50) / 5.911 ms (p95)** | Tempo ponta-a-ponta incluindo webhook HTTP, persistência em banco com lock e round-trip da API GLPI. |

---

## 4. Comparativo Arquitetural e de Engenharia (Local-First vs. Provedores de Nuvem)

| Dimensão de Análise | Arquitetura Local-First (IBM Granite 97M) | Gateway de Nuvem (Gemini 3.5 Flash / DeepSeek) |
|---|---|---|
| **Local de Execução** | Container on-premise em CPU | Nuvem pública gerenciada (API REST remota) |
| **Dependência de Conectividade Externa** | Operação 100% autônoma (imune a quedas de WAN) | Requer conexão de internet estável |
| **Custo de Inferência** | Infraestrutura existente (sem custo por token) | Cobrança por milhão de tokens (sujeita a variação cambial) |
| **Controle de Cotas (*Rate Limits*)** | Limitado apenas pelo hardware local | Sujeito a RPM/TPM e limites de projeto |
| **Função no Workflow V9** | **Provedor Primário Obrigatório** | **Fallback Secundário de Contingência** |
| **Status da Avaliação Confirmatória** | Aguardando holdout institucional intocado | Aguardando execução do benchmark pareado com cotas autorizadas |

