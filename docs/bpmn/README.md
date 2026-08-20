# 📐 Modelos Formais de Processos BPMN 2.0 (OMG)

Este diretório contém os modelos normativos em padrão **BPMN 2.0.2 (XML)** do sistema de gerenciamento de chamados GLPI e automação com IA:

---

## 📂 Arquivos do Diretório:

1. **[AS_IS.bpmn](./AS_IS.bpmn)** — Processo Tradicional Manual (Triagem em fila única com sobrecarga cognitiva do fiscal).
2. **[TO_BE_V9.bpmn](./TO_BE_V9.bpmn)** — Processo Automatizado V9 (Microsserviços orientados a eventos, persistência transacional com fila PostgreSQL, gates determinísticos, inferência local PyTorch FP32, abstenção conservadora e *human-in-the-loop*).

---

## 🏛️ Estrutura de Pools e Lanes do Modelo TO-BE:

* **Pool 1: Solicitante (Usuário / Servidor)**
  * Abertura do chamado com título, descrição e localização.
* **Pool 2: Helpdesk GLPI**
  * Recepção do ticket e disparo do webhook HTTP.
* **Pool 3: Orquestração de Automação (n8n & PostgreSQL)**
  * *Lane Ingress & Fila:* WF06 com SKIP LOCKED e Rate Limiter Adaptativo.
  * *Lane Sincronização:* WF01 para reconciliação e renovação de leases.
  * *Lane Deduplicação:* WF02 (Retrieval Top-20 + Classificador de Pares).
  * *Lane Classificação:* WF03 (Gates determinísticos + Modelo Híbrido Granite 97M).
  * *Lane Decisão Fiscal:* WF04 (Encaminhamento e disparo de e-mails via Mailpit).
* **Pool 4: Fiscal Humano (Human-in-the-Loop)**
  * Triagem manual assistida para chamados em abstenção segura (TRIAGEM_MANUAL) e confirmação de duplicidades.
