# Justificativas Técnicas, Arquiteturais e Metodológicas do Projeto

**Projeto:** Automação Inteligente de Triagem e Classificação de Chamados GLPI com Múltiplos Modelos de IA  
**Data:** 19 de Agosto de 2026  
**Status:** Versão 9 (Microsserviços n8n + Runtime Local PyTorch FP32 + PostgreSQL)

---

## 1. Visão Geral e Filosofia de Engenharia

Este documento consolida a fundamentação técnica, matemática e de engenharia de software de todas as decisões tomadas durante o ciclo de pesquisa e desenvolvimento do sistema. A premissa central do projeto é o **pragmatismo científico**: construir uma solução que atenda aos mais rigorosos critérios acadêmicos de validação empírica, mantendo-se estritamente viável, reprodutível, econômica e segura para implantação em infraestrutura universitária real.

---

## 2. Decisões Arquiteturais e de Infraestrutura

### 2.1. Escolha do n8n como Orquestrador de Processos
* **Decisão:** Utilização do n8n como plataforma de orquestração de microsserviços orientados a eventos.
* **Justificativa:**
  1. **Transparência e Baixo Acoplamento:** O n8n permite que operadores de TI e pesquisadores visualizem o fluxo de execução em tempo real, examinando payloads JSON nó a nó sem necessidade de acessar bancos de dados diretamente para depuração diária.
  2. **Extensibilidade com JavaScript Puro:** Todos os nós de transformação de dados e gateways utilizam código JavaScript padrão sem dependências obscuras, facilitando a portabilidade e auditoria estática.
  3. **Suporte Nativo a Webhooks e Agendamentos:** O n8n gerencia simultaneamente endpoints HTTP assíncronos (webhooks do GLPI) e agendamentos cron periódicos (sincronizador de lotes) em um único processo gerenciado.
* **Alternativas Rejeitadas:**
  - *Apache Airflow:* Projetado para pipelines batch analíticos de grande volume, excessivamente complexo e pesado para requisições transacionais em tempo real com baixa latência.
  - *Scripts Python Monolíticos:* Dificultam o monitoramento operacional visual por equipes de TI de infraestrutura e aumentam o acoplamento entre regras de negócio e transporte de rede.

---

### 2.2. Migração da Arquitetura Monolítica (V1-V7) para 6 Microsserviços (V9)
* **Decisão:** Divisão do pipeline em 6 workflows desacoplados (`WF01` a `WF06`).
* **Justificativa:**
  1. **Eliminação do Bloqueio em Cascata:** No monolito V7 (66 nós), se uma API de IA ou o servidor de e-mail apresentasse lentidão, toda a esteira de triagem de chamados do campus ficava travada.
  2. **Isolamento de Falhas e Testabilidade:** Cada microsserviço possui contrato de entrada e saída bem definido, permitindo testes unitários, testes de carga e simulações de falha pontuais.
  3. **Papel dos 6 Workflows V9:**
     - **WF06 (Fila IA Ingress):** Recebe o webhook do GLPI, valida credenciais e responde imediatamente com `HTTP 202 Accepted`, enfileirando o chamado no PostgreSQL sem segurar a conexão do usuário.
     - **WF01 (Sincronizador):** Faz o polling controlado em lotes (*leases* transacionais com tempo de expiração) para despacho ordenado.
     - **WF02 (Triagem & Dedup):** Executa o pipeline de deduplicação com recuperação de candidatos e scoring par-a-par.
     - **WF03 (Classificação):** Categoriza chamados em 4 classes operacionais (`OBRA`, `DEMO`, `SOB_DEMANDA`, `TRIAGEM_MANUAL`).
     - **WF04 (Decisão Fiscal):** Gerencia fluxos de aprovação orçamentária, geração de tokens seguros e despacho de notificações via e-mail.
     - **WF05 (Métricas & Auditoria):** Consolida telemetria, tempos de resposta, disponibilidade de provedores e indicadores de SLA.

---

### 2.3. Controle Transacional com PostgreSQL (*Advisory Locks* e *Leases*)
* **Decisão:** Utilização de tabelas relacionais no PostgreSQL com *Session-Level Advisory Locks* (`pg_try_advisory_xact_lock`) e controle de *leases* temporais (`reservado_ate`).
* **Justificativa:**
  1. **Prevenção de Condições de Corrida (*Race Conditions*):** Quando múltiplos usuários registram o mesmo problema simultaneamente (ex.: queda de energia em um bloco), múltiplos workers do n8n poderiam tentar processar os mesmos chamados como referência de deduplicação ao mesmo tempo. Os locks garantem atomicidade estrita (ACID).
  2. **Simplicidade Operacional:** Dispensa a instalação e manutenção de infraestruturas complexas de mensageria (como RabbitMQ ou Apache Kafka), que seriam superdimensionadas para o volume diário de um campus universitário.
  3. **Recuperação Automática de Falhas:** Caso um worker sofra falha no meio do processamento, o lease expira automaticamente e o chamado volta ao estado `PENDENTE`, sendo reprocessado sem intervenção manual.

---

## 3. Decisões de Modelagem e Inteligência Artificial

### 3.1. Abordagem *Local-First* vs. Apenas Modelos em Nuvem (LLMs)
* **Decisão:** Priorizar inferência local em CPU padrão com modelo híbrido dedicado, mantendo modelos de nuvem como contingência de segundo/terceiro nível.
* **Justificativa:**
  1. **Privacidade e Conformidade LGPD:** Chamados de TI e manutenção patrimonial contêm nomes de servidores, números de salas e detalhes de infraestrutura crítica. A inferência local garante que 100% das informações permaneçam no ambiente do campus.
  2. **SLA e Imunidade a Quedas de WAN:** Falhas na conexão de internet externa não interrompem a triagem e o atendimento interno.
  3. **Imunidade a Limites de Cota (*Rate Limits*):** Modelos remotos sofrem com erros `HTTP 429` durante surtos de requisições concorrentes.
  4. **Custo Financeiro Zero:** Elimina despesas recorrentes em moeda estrangeira por volume de tokens processados.
  5. **Latência Previsível:** Inferência local em ~144 ms contra > 1.000 ms de chamadas remotas de nuvem.

---

### 3.2. Representação Híbrida de Texto (TF-IDF + Embeddings IBM Granite 97M)
* **Decisão:** Fusão vetorial de características léxicas esparsas (TF-IDF) com representação densa profunda (IBM Granite Embedding 97M Multilingual R2).
* **Justificativa Científica (Estudo de Ablação):**
  - *TF-IDF Puro (Macro-F1 = 0.9296):* Excelente para capturar termos técnicos exatos ("disjuntor", "goteira", "vazamento"), mas falha em sinônimos e paráfrases abstratas.
  - *Embeddings Densos Puros (Macro-F1 = 0.9244):* Capturam a semântica conceitual, mas perdem a precisão de códigos de equipamentos e termos unívocos de catálogo.
  - *Híbrido TF-IDF + Granite 97M (Macro-F1 = 0.9520):* Supera ambas as abordagens isoladas (+2,24% sobre o melhor léxico e +2,76% sobre o melhor denso), unindo precisão léxica e generalização semântica.
* **Por que o IBM Granite 97M Multilingual R2:**
  - Modelo extremamente compacto (97 milhões de parâmetros), roda em CPU FP32 com menos de 1 GB de RAM ocupada (969 MB RSS) e processamento em ~140 ms.
  - Vetores densos de 384 dimensões e suporte nativo ao português brasileiro.

---

### 3.3. Escolha dos Classificadores (Linear SVM e Regressão Logística)
* **Decisão:** Linear SVM (com calibração Sigmoide/Platt) para classificação hierárquica e Regressão Logística para deduplicação par-a-par.
* **Justificativa:**
  1. **Linear SVM:** Em espaços de atributos híbridos de alta dimensionalidade (TF-IDF + embeddings), classificadores lineares com regularização L2 e maximização de margem possuem garantias teóricas sólidas contra sobreajuste (*overfitting*) (Cortes & Vapnik, 1995) e tempo de inferência inferior a 1 ms.
  2. **Regressão Logística Calibrada:** Produz estimativas de probabilidade bem calibradas e contínuas no intervalo $[0, 1]$, ideais para aplicação de limiares operacionais assimétricos.

---

### 3.4. Matriz de Custo Assimétrica e Limiar Conservador para `OBRA` ($\theta = 0,90$)
* **Decisão:** Fixação de limiar de corte rígido ($\theta = 0,90$) e exigência de evidência explícita para a classe `OBRA`, canalizando casos limítrofes para a classe `TRIAGEM_MANUAL` (abstenção segura).
* **Justificativa Operacional e Econômica:**
  - Classificar erroneamente uma manutenção rotineira como "Obra" deflagra procedimentos burocráticos licitatórios caros e desnecessários.
  - Portanto, o custo do Falso Positivo em `OBRA` é ordens de grandeza maior que o custo de encaminhar o chamado para revisão humana (`TRIAGEM_MANUAL`).
  - O sistema obteve **0 erros críticos** no benchmark formal, assegurando confiabilidade operacional máxima.

---

## 4. Decisões Metodológicas e Validação Científica

### 4.1. Prevenção de Vazamento de Dados com Validação Cruzada 5-Fold Agrupada
* **Decisão:** Adoção de *Stratified Grouped 5-Fold Cross-Validation*, agrupando os registros criptograficamente pelo hash do núcleo semântico (`narrative_core_sha256`).
* **Justificativa:**
  - Em problemas de NLP com geração de paráfrases, se duas variações do mesmo chamado ficarem uma no treino e outra no teste, o classificador apenas memoriza o texto, gerando métricas artificialmente infladas (*data leakage*).
  - O particionamento por hash garante que todo o núcleo semântico fique inteiramente no treino ou inteiramente no teste em cada dobra.

---

### 4.2. Escopo e Limitações Metodológicas Declaradas
* **Pesquisador Único:** O projeto foi conduzido por um único aluno de Iniciação Científica. Por isso, a criação de comitê duplo-cego externo e cálculo de Cohen's Kappa entre terceiros foi formalmente declarada fora de escopo. A validade acadêmica apoia-se no rigor da validação cruzada agrupada, testes não-paramétricos (Wilcoxon/McNemar) e explicabilidade com SHAP.
* **Classificação Seletiva e Abstenção:** No holdout cego, o sistema alcançou **100% de acurácia seletiva** (zero erros nas decisões emitidas), operando com **92,28% de abstenção** para garantir segurança total. Em operação com limiares balanceados (validação cruzada), a cobertura automática é de **69,03%** com **95,51% de acurácia global**.
