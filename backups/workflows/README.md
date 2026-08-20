# 📦 Histórico de Versões dos Workflows n8n (V1 a V8)

Este diretório armazena o histórico completo de evolução e arquitetura dos fluxos de automação desenvolvidos para o sistema de triagem GLPI no IF Sudeste MG.

---

## 🗺️ Mapa de Evolução Arquitetural

| Versão | Paradigma | Principais Características | Localização dos Artefatos |
|---|---|---|---|
| **V1** | Monolítico Síncrono | Webhook direto, triagem básica sem persistência intermediária. | [ackups/workflows/V1/](./V1/) |
| **V2** | Monolítico com Logs | Introdução de normalização de texto e logs estruturados em JSON. | [ackups/workflows/V2/](./V2/) |
| **V3** | Multi-Categoria | Suporte a múltiplas categorias de manutenção e rotas de e-mail. | [ackups/workflows/V3/](./V3/) |
| **V4** | Validação de Schema | Respostas estruturadas em JSON Schema e controle de tokens. | [ackups/workflows/V4/](./V4/) |
| **V5** | Tratamento de Erros | Retentativas automáticas e fallback básico de provedores. | [ackups/workflows/V5/](./V5/) |
| **V6** | Banco PostgreSQL | Primeira versão com persistência transacional e deduplicação relacional. | [ackups/workflows/V6/](./V6/) |
| **V7** | Separação de Fases | Desacoplamento entre Triagem/Deduplicação e Classificação de Manutenção. | [ackups/workflows/V7/](./V7/) |
| **V8** | Orquestração Modular (3 WFs) | WF01 (Orquestrador), WF02 (Triagem/Dedup) e WF03 (Fiscal). | [ackups/workflows/V8/](./V8/) |
| **V9 (Vigente)** | Microsserviços Orientados a Eventos (6 WFs) | Fila IA assíncrona, Rate Limiting Adaptativo, advisory locks, isolamento e runtime PyTorch local. | [
8n/workflows/Versão9/](../../n8n/workflows/Versão9/) |
