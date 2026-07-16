"""Gera V9-WF05-Metricas.json.

WF05 e um workflow independente de avaliacao. Ele nao participa da triagem
operacional; apenas garante o schema analitico e consolida metricas para BI.
"""
from __future__ import annotations

import json
import hashlib
from pathlib import Path

from helpers import sanitize_workflow_secrets


DIR = Path(__file__).resolve().parent
OUTPUT_FILES = ["V9-WF05-Metricas.json"]
SNAPSHOT_SHA256 = "4e4715c33cdde9478e4e47b6a9c7f2d0375a4586e89ca20e7cb3958f7db73ac0"

PG_CRED = {"postgres": {"id": "PG_TRIAGEM", "name": "Postgres Triagem"}}
SMTP_CRED = {"smtp": {"id": "SMTP_MAILPIT_LOCAL", "name": "SMTP Mailpit Local"}}


OBSERVABILITY_SCHEMA_SQL = r"""
CREATE TABLE IF NOT EXISTS ia_decisoes (
  id                  BIGSERIAL PRIMARY KEY,
  ticket_id           BIGINT,
  workflow_origem     TEXT NOT NULL,
  etapa               TEXT NOT NULL,
  modelo_ia           TEXT DEFAULT 'Gemini',
  versao_modelo       TEXT,
  prompt_version      TEXT,
  input_hash          TEXT,
  input_resumo        JSONB,
  output_raw          JSONB,
  output_normalizado  JSONB,
  predicao            TEXT,
  classe_referencia_id BIGINT,
  confianca           NUMERIC(5,4),
  justificativa       TEXT,
  tempo_resposta_ms   INTEGER,
  tentativa_numero    INTEGER,
  erro_ia             BOOLEAN DEFAULT FALSE,
  mensagem_erro       TEXT,
  criado_em           TIMESTAMPTZ DEFAULT NOW()
);

CREATE INDEX IF NOT EXISTS idx_ia_decisoes_ticket ON ia_decisoes(ticket_id);
CREATE INDEX IF NOT EXISTS idx_ia_decisoes_etapa ON ia_decisoes(etapa);
CREATE INDEX IF NOT EXISTS idx_ia_decisoes_prompt ON ia_decisoes(prompt_version);
CREATE INDEX IF NOT EXISTS idx_ia_decisoes_modelo ON ia_decisoes(modelo_ia, versao_modelo);
CREATE INDEX IF NOT EXISTS idx_ia_decisoes_criado ON ia_decisoes(criado_em);
CREATE INDEX IF NOT EXISTS idx_ia_decisoes_predicao ON ia_decisoes(predicao);

CREATE TABLE IF NOT EXISTS ia_tentativas_modelo (
  id                  BIGSERIAL PRIMARY KEY,
  ia_decisao_id       BIGINT REFERENCES ia_decisoes(id) ON DELETE CASCADE,
  ticket_id           BIGINT,
  run_id              TEXT,
  case_id             TEXT,
  episode_id          TEXT,
  workflow_origem     TEXT NOT NULL,
  etapa               TEXT NOT NULL,
  ciclo_tentativa     TEXT NOT NULL,
  ordem_tentativa     INTEGER NOT NULL CHECK (ordem_tentativa > 0),
  papel_modelo        TEXT NOT NULL,
  provedor_ia         TEXT NOT NULL,
  versao_modelo       TEXT NOT NULL,
  perfil_pensamento   TEXT,
  fallback_utilizado  BOOLEAN NOT NULL DEFAULT FALSE,
  iniciado_em         TIMESTAMPTZ,
  finalizado_em       TIMESTAMPTZ,
  duracao_ms          INTEGER,
  transporte_ok       BOOLEAN,
  schema_ok           BOOLEAN,
  status_tentativa    TEXT NOT NULL,
  codigo_erro         TEXT,
  mensagem_erro       TEXT,
  resposta_raw        JSONB,
  endpoint             TEXT,
  perfil_entrada       TEXT,
  prompt_chars         INTEGER,
  input_chars          INTEGER,
  total_candidatos     INTEGER,
  http_status          INTEGER,
  retry_after_seconds  INTEGER,
  retryable            BOOLEAN,
  tipo_erro            TEXT,
  metadata_cientifica  JSONB,
  input_tokens        INTEGER,
  output_tokens       INTEGER,
  total_tokens        INTEGER,
  politica_execucao   JSONB NOT NULL DEFAULT '{}'::jsonb,
  criado_em           TIMESTAMPTZ NOT NULL DEFAULT NOW(),
  UNIQUE(ciclo_tentativa, ordem_tentativa)
);

ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS endpoint TEXT;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS perfil_entrada TEXT;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS prompt_chars INTEGER;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS input_chars INTEGER;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS total_candidatos INTEGER;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS http_status INTEGER;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS retry_after_seconds INTEGER;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS retryable BOOLEAN;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS tipo_erro TEXT;
ALTER TABLE ia_tentativas_modelo ADD COLUMN IF NOT EXISTS metadata_cientifica JSONB;

CREATE INDEX IF NOT EXISTS idx_ia_tentativas_decisao
  ON ia_tentativas_modelo(ia_decisao_id, ordem_tentativa);
CREATE INDEX IF NOT EXISTS idx_ia_tentativas_run
  ON ia_tentativas_modelo(run_id, etapa, criado_em DESC)
  WHERE run_id IS NOT NULL;
CREATE INDEX IF NOT EXISTS idx_ia_tentativas_modelo
  ON ia_tentativas_modelo(provedor_ia, versao_modelo, status_tentativa, criado_em DESC);

CREATE TABLE IF NOT EXISTS avaliacoes_humanas (
  id                 BIGSERIAL PRIMARY KEY,
  ticket_id          BIGINT,
  etapa              TEXT NOT NULL,
  avaliador          TEXT,
  decisao_ia         TEXT,
  decisao_humana     TEXT,
  classe_correta     TEXT,
  ia_estava_correta  BOOLEAN,
  tipo_erro          TEXT,
  gravidade_erro     TEXT,
  motivo_divergencia TEXT,
  observacao         TEXT,
  avaliacao_token    TEXT,
  avaliacao_token_expira_em TIMESTAMPTZ,
  status_avaliacao   TEXT DEFAULT 'CONCLUIDA',
  origem_amostra     TEXT,
  solicitado_em      TIMESTAMPTZ,
  concluido_em       TIMESTAMPTZ,
  avaliado_em        TIMESTAMPTZ DEFAULT NOW()
);

ALTER TABLE avaliacoes_humanas ADD COLUMN IF NOT EXISTS avaliacao_token TEXT;
ALTER TABLE avaliacoes_humanas ADD COLUMN IF NOT EXISTS avaliacao_token_expira_em TIMESTAMPTZ;
ALTER TABLE avaliacoes_humanas ADD COLUMN IF NOT EXISTS status_avaliacao TEXT DEFAULT 'CONCLUIDA';
ALTER TABLE avaliacoes_humanas ADD COLUMN IF NOT EXISTS origem_amostra TEXT;
ALTER TABLE avaliacoes_humanas ADD COLUMN IF NOT EXISTS solicitado_em TIMESTAMPTZ;
ALTER TABLE avaliacoes_humanas ADD COLUMN IF NOT EXISTS concluido_em TIMESTAMPTZ;

CREATE INDEX IF NOT EXISTS idx_avaliacoes_ticket ON avaliacoes_humanas(ticket_id);
CREATE INDEX IF NOT EXISTS idx_avaliacoes_etapa ON avaliacoes_humanas(etapa);
CREATE INDEX IF NOT EXISTS idx_avaliacoes_correta ON avaliacoes_humanas(ia_estava_correta);
CREATE INDEX IF NOT EXISTS idx_avaliacoes_tipo_erro ON avaliacoes_humanas(tipo_erro);
CREATE INDEX IF NOT EXISTS idx_avaliacoes_data ON avaliacoes_humanas(avaliado_em);
CREATE UNIQUE INDEX IF NOT EXISTS idx_avaliacoes_token ON avaliacoes_humanas(avaliacao_token) WHERE avaliacao_token IS NOT NULL;
CREATE UNIQUE INDEX IF NOT EXISTS idx_avaliacoes_pendente ON avaliacoes_humanas(ticket_id, etapa) WHERE status_avaliacao = 'PENDENTE';
CREATE INDEX IF NOT EXISTS idx_avaliacoes_status ON avaliacoes_humanas(status_avaliacao);

CREATE TABLE IF NOT EXISTS workflow_eventos (
  id              BIGSERIAL PRIMARY KEY,
  ticket_id       BIGINT,
  workflow        TEXT NOT NULL,
  node_name       TEXT,
  fase            TEXT,
  acao            TEXT,
  status_evento   TEXT,
  status_anterior TEXT,
  status_novo     TEXT,
  erro            BOOLEAN DEFAULT FALSE,
  mensagem_erro   TEXT,
  execution_id    TEXT,
  inicio_em       TIMESTAMPTZ,
  fim_em          TIMESTAMPTZ,
  duracao_ms      INTEGER,
  criado_em       TIMESTAMPTZ DEFAULT NOW()
);

CREATE INDEX IF NOT EXISTS idx_workflow_eventos_ticket ON workflow_eventos(ticket_id);
CREATE INDEX IF NOT EXISTS idx_workflow_eventos_workflow ON workflow_eventos(workflow);
CREATE INDEX IF NOT EXISTS idx_workflow_eventos_fase ON workflow_eventos(fase);
CREATE INDEX IF NOT EXISTS idx_workflow_eventos_criado ON workflow_eventos(criado_em);
CREATE INDEX IF NOT EXISTS idx_workflow_eventos_erro ON workflow_eventos(erro);

CREATE TABLE IF NOT EXISTS dataset_controle (
  id                              BIGSERIAL PRIMARY KEY,
  ticket_id                       BIGINT,
  origem                          TEXT NOT NULL DEFAULT 'SEED_CONTROLADO',
  cenario_controle                TEXT,
  duplicado_esperado              BOOLEAN,
  referencia_duplicado_esperada   BIGINT,
  classificacao_esperada          TEXT,
  executor_esperado               TEXT,
  status_final_esperado           TEXT,
  nivel_dificuldade               TEXT,
  observacao                      TEXT,
  criado_em                       TIMESTAMPTZ DEFAULT NOW()
);

CREATE INDEX IF NOT EXISTS idx_dataset_ticket ON dataset_controle(ticket_id);
CREATE INDEX IF NOT EXISTS idx_dataset_cenario ON dataset_controle(cenario_controle);
CREATE INDEX IF NOT EXISTS idx_dataset_origem ON dataset_controle(origem);

CREATE OR REPLACE VIEW vw_dataset_controle_resultados AS
SELECT
  d.id AS dataset_id,
  d.ticket_id,
  d.origem,
  d.cenario_controle,
  d.duplicado_esperado,
  d.referencia_duplicado_esperada,
  d.classificacao_esperada,
  d.executor_esperado,
  d.status_final_esperado,
  d.nivel_dificuldade,
  t.classificacao_final AS classificacao_obtida,
  t.executor AS executor_obtido,
  t.status_nome AS status_final_obtido,
  t.duplicado_de_id AS referencia_duplicado_obtida,
  CASE
    WHEN d.duplicado_esperado IS NULL THEN NULL
    WHEN d.duplicado_esperado = TRUE THEN COALESCE(t.duplicado_de_id IS NOT NULL OR t.classificacao_final='DUPLICADO', FALSE)
    ELSE COALESCE(t.duplicado_de_id IS NULL AND COALESCE(t.classificacao_final,'') <> 'DUPLICADO', FALSE)
  END AS duplicidade_ok,
  CASE
    WHEN d.classificacao_esperada IS NULL THEN NULL
    ELSE COALESCE(t.classificacao_final = d.classificacao_esperada, FALSE)
  END AS classificacao_ok,
  CASE
    WHEN d.executor_esperado IS NULL THEN NULL
    ELSE COALESCE(t.executor = d.executor_esperado, FALSE)
  END AS executor_ok,
  CASE
    WHEN d.status_final_esperado IS NULL THEN NULL
    ELSE COALESCE(t.status_nome = d.status_final_esperado, FALSE)
  END AS status_final_ok,
  t.ultima_acao_workflow,
  t.atualizado_em
FROM dataset_controle d
LEFT JOIN tickets_processados t ON t.id = d.ticket_id;

CREATE TABLE IF NOT EXISTS metricas_diarias_automacao (
  data_ref                         DATE PRIMARY KEY,
  total_chamados_processados       INTEGER DEFAULT 0,
  total_classificados_automaticamente INTEGER DEFAULT 0,
  total_enviados_triagem_manual    INTEGER DEFAULT 0,
  total_com_erro_ia                INTEGER DEFAULT 0,
  total_aguardando_fiscal          INTEGER DEFAULT 0,
  tempo_medio_triagem_min          NUMERIC(12,2),
  taxa_intervencao_humana          NUMERIC(8,4),
  taxa_automacao_efetiva           NUMERIC(8,4),
  taxa_erro_ia                     NUMERIC(8,4),
  taxa_triagem_manual              NUMERIC(8,4),
  chamados_travados_24h            INTEGER DEFAULT 0,
  atualizado_em                    TIMESTAMPTZ DEFAULT NOW()
);

CREATE TABLE IF NOT EXISTS metricas_prompt_version (
  data_ref              DATE NOT NULL,
  etapa                 TEXT NOT NULL,
  prompt_version        TEXT NOT NULL,
  modelo_ia             TEXT,
  versao_modelo         TEXT,
  total_decisoes        INTEGER DEFAULT 0,
  total_erros_ia        INTEGER DEFAULT 0,
  confianca_media       NUMERIC(8,4),
  tempo_medio_ia_ms     NUMERIC(14,2),
  acuracia_avaliada     NUMERIC(8,4),
  atualizado_em         TIMESTAMPTZ DEFAULT NOW(),
  PRIMARY KEY(data_ref, etapa, prompt_version, modelo_ia, versao_modelo)
);

CREATE TABLE IF NOT EXISTS metricas_workflow_performance (
  data_ref          DATE NOT NULL,
  workflow          TEXT NOT NULL,
  fase              TEXT NOT NULL DEFAULT '',
  total_eventos     INTEGER DEFAULT 0,
  total_erros       INTEGER DEFAULT 0,
  duracao_media_ms  NUMERIC(14,2),
  duracao_p95_ms    NUMERIC(14,2),
  atualizado_em     TIMESTAMPTZ DEFAULT NOW(),
  PRIMARY KEY(data_ref, workflow, fase)
);

CREATE TABLE IF NOT EXISTS resumos_executivos_ia (
  id             BIGSERIAL PRIMARY KEY,
  periodo_inicio DATE NOT NULL,
  periodo_fim    DATE NOT NULL,
  tipo_resumo    TEXT NOT NULL,
  prompt_version TEXT,
  modelo_ia      TEXT,
  resumo         TEXT NOT NULL,
  dados_base     JSONB,
  criado_em      TIMESTAMPTZ DEFAULT NOW()
);

CREATE OR REPLACE VIEW vw_kpi_geral_automacao AS
SELECT
  COUNT(*)::int AS total_chamados_processados,
  COUNT(*) FILTER (WHERE classificacao_final IN ('OBRA','DEMO','SOB_DEMANDA','DUPLICADO'))::int AS total_classificados_automaticamente,
  COUNT(*) FILTER (WHERE classificacao_final = 'TRIAGEM_MANUAL' OR triagem_manual = TRUE)::int AS total_enviados_para_triagem_manual,
  COUNT(*) FILTER (WHERE triagem_status = 'ERRO_IA' OR ultimo_erro_ia IS NOT NULL)::int AS total_com_erro_ia,
  ROUND(AVG(EXTRACT(EPOCH FROM (triado_em - data_abertura)) / 60.0) FILTER (WHERE triado_em IS NOT NULL AND data_abertura IS NOT NULL AND triado_em >= data_abertura), 2) AS tempo_medio_triagem,
  ROUND(100.0 * COUNT(*) FILTER (WHERE triagem_manual = TRUE OR em_aprovacao_fiscal = TRUE OR decisao_fiscal IS NOT NULL) / NULLIF(COUNT(*), 0), 2) AS taxa_intervencao_humana,
  ROUND(100.0 * COUNT(*) FILTER (WHERE classificacao_final IN ('OBRA','DEMO','SOB_DEMANDA','DUPLICADO')) / NULLIF(COUNT(*), 0), 2) AS taxa_automacao_efetiva
FROM tickets_processados;

CREATE OR REPLACE VIEW vw_kpi_duplicidade AS
SELECT
  COUNT(*) FILTER (WHERE classificacao = 'POSSIVEL_DUPLICADO' OR classificacao_final IN ('POSSIVEL_DUPLICADO','DUPLICADO') OR decisao_fiscal IN ('CONFIRMOU_DUP','REJEITOU_DUP'))::int AS possiveis_duplicados_detectados,
  COUNT(*) FILTER (WHERE decisao_fiscal = 'CONFIRMOU_DUP')::int AS duplicidades_confirmadas,
  COUNT(*) FILTER (WHERE decisao_fiscal = 'REJEITOU_DUP')::int AS duplicidades_rejeitadas,
  COUNT(*) FILTER (WHERE em_aprovacao_fiscal = TRUE)::int AS duplicidades_pendentes,
  ROUND(100.0 * COUNT(*) FILTER (WHERE decisao_fiscal = 'CONFIRMOU_DUP') / NULLIF(COUNT(*) FILTER (WHERE decisao_fiscal IN ('CONFIRMOU_DUP','REJEITOU_DUP')), 0), 2) AS precisao_duplicidade,
  ROUND(100.0 * COUNT(*) FILTER (WHERE decisao_fiscal = 'REJEITOU_DUP') / NULLIF(COUNT(*) FILTER (WHERE decisao_fiscal IN ('CONFIRMOU_DUP','REJEITOU_DUP')), 0), 2) AS taxa_falso_positivo_duplicidade,
  ROUND(AVG(EXTRACT(EPOCH FROM (aprovacao_decidida_em - aprovacao_iniciada_em)) / 60.0) FILTER (WHERE aprovacao_decidida_em IS NOT NULL AND aprovacao_iniciada_em IS NOT NULL), 2) AS tempo_medio_decisao_fiscal_min
FROM tickets_processados;

CREATE OR REPLACE VIEW vw_matriz_confusao_classificacao AS
WITH base AS (
  SELECT
    COALESCE(classe_correta, decisao_humana) AS classe_correta,
    decisao_ia AS classe_predita_pela_ia
  FROM avaliacoes_humanas
  WHERE etapa = 'CLASSIFICACAO'
    AND COALESCE(classe_correta, decisao_humana) IS NOT NULL
    AND decisao_ia IS NOT NULL
)
SELECT
  classe_correta,
  classe_predita_pela_ia,
  COUNT(*)::int AS quantidade,
  ROUND(100.0 * COUNT(*) / NULLIF(SUM(COUNT(*)) OVER (PARTITION BY classe_correta), 0), 2) AS percentual
FROM base
GROUP BY classe_correta, classe_predita_pela_ia;

CREATE OR REPLACE VIEW vw_kpi_classificacao AS
WITH classes(classe) AS (VALUES ('OBRA'), ('DEMO'), ('SOB_DEMANDA'), ('DEMO_SEM_EQUIPE'), ('TRIAGEM_MANUAL')),
aval AS (
  SELECT decisao_ia, COALESCE(classe_correta, decisao_humana) AS classe_correta, ia_estava_correta
  FROM avaliacoes_humanas
  WHERE etapa = 'CLASSIFICACAO'
),
metricas AS (
  SELECT
    c.classe,
    COUNT(*) FILTER (WHERE a.decisao_ia = c.classe AND a.classe_correta = c.classe)::numeric AS tp,
    COUNT(*) FILTER (WHERE a.decisao_ia = c.classe AND a.classe_correta <> c.classe)::numeric AS fp,
    COUNT(*) FILTER (WHERE a.decisao_ia <> c.classe AND a.classe_correta = c.classe)::numeric AS fn
  FROM classes c CROSS JOIN aval a
  GROUP BY c.classe
),
por_classe AS (
  SELECT
    classe,
    tp / NULLIF(tp + fp, 0) AS precisao,
    tp / NULLIF(tp + fn, 0) AS recall,
    (2 * (tp / NULLIF(tp + fp, 0)) * (tp / NULLIF(tp + fn, 0))) / NULLIF((tp / NULLIF(tp + fp, 0)) + (tp / NULLIF(tp + fn, 0)), 0) AS f1
  FROM metricas
)
SELECT
  ROUND(AVG((ia_estava_correta::int)::numeric) FILTER (WHERE ia_estava_correta IS NOT NULL), 4) AS acuracia_geral,
  ROUND(MAX(precisao) FILTER (WHERE classe='OBRA'), 4) AS precisao_obra,
  ROUND(MAX(recall) FILTER (WHERE classe='OBRA'), 4) AS recall_obra,
  ROUND(MAX(f1) FILTER (WHERE classe='OBRA'), 4) AS f1_obra,
  ROUND(MAX(precisao) FILTER (WHERE classe='DEMO'), 4) AS precisao_demo,
  ROUND(MAX(recall) FILTER (WHERE classe='DEMO'), 4) AS recall_demo,
  ROUND(MAX(f1) FILTER (WHERE classe='DEMO'), 4) AS f1_demo,
  ROUND(MAX(precisao) FILTER (WHERE classe='SOB_DEMANDA'), 4) AS precisao_sob_demanda,
  ROUND(MAX(recall) FILTER (WHERE classe='SOB_DEMANDA'), 4) AS recall_sob_demanda,
  ROUND(MAX(f1) FILTER (WHERE classe='SOB_DEMANDA'), 4) AS f1_sob_demanda,
  ROUND(MAX(precisao) FILTER (WHERE classe='DEMO_SEM_EQUIPE'), 4) AS precisao_demo_sem_equipe,
  ROUND(MAX(recall) FILTER (WHERE classe='DEMO_SEM_EQUIPE'), 4) AS recall_demo_sem_equipe,
  ROUND(MAX(f1) FILTER (WHERE classe='DEMO_SEM_EQUIPE'), 4) AS f1_demo_sem_equipe,
  ROUND(MAX(precisao) FILTER (WHERE classe='TRIAGEM_MANUAL'), 4) AS precisao_triagem_manual,
  ROUND(MAX(recall) FILTER (WHERE classe='TRIAGEM_MANUAL'), 4) AS recall_triagem_manual,
  ROUND(MAX(f1) FILTER (WHERE classe='TRIAGEM_MANUAL'), 4) AS f1_triagem_manual,
  ROUND(AVG(f1), 4) AS f1_macro,
  (SELECT ROUND(100.0 * COUNT(*) FILTER (WHERE classificacao_final='TRIAGEM_MANUAL') / NULLIF(COUNT(*), 0), 2) FROM tickets_processados) AS taxa_triagem_manual,
  (SELECT ROUND(100.0 * COUNT(*) FILTER (WHERE triagem_status='ERRO_IA' OR ultimo_erro_ia IS NOT NULL) / NULLIF(COUNT(*), 0), 2) FROM tickets_processados) AS taxa_erro_ia
FROM por_classe, aval;

CREATE OR REPLACE VIEW vw_scores_classificacao AS
WITH classes(classe) AS (VALUES ('OBRA'), ('DEMO'), ('SOB_DEMANDA'), ('DEMO_SEM_EQUIPE'), ('TRIAGEM_MANUAL')),
aval AS (
  SELECT
    a.ticket_id,
    COALESCE(NULLIF(a.classe_correta, ''), NULLIF(a.decisao_humana, '')) AS classe_correta,
    NULLIF(a.decisao_ia, '') AS classe_predita,
    a.ia_estava_correta,
    a.avaliado_em
  FROM avaliacoes_humanas a
  WHERE a.etapa = 'CLASSIFICACAO'
    AND COALESCE(a.status_avaliacao, 'CONCLUIDA') = 'CONCLUIDA'
    AND COALESCE(NULLIF(a.classe_correta, ''), NULLIF(a.decisao_humana, '')) IS NOT NULL
    AND NULLIF(a.decisao_ia, '') IS NOT NULL
),
base AS (
  SELECT
    a.ticket_id,
    c.classe,
    a.classe_correta,
    COALESCE(d.predicao, a.classe_predita) AS classe_predita,
    (a.classe_correta = c.classe) AS classe_positiva,
    COALESCE(d.confianca, CASE WHEN a.ia_estava_correta THEN 1 ELSE 0 END::numeric) AS confianca_decisao,
    CASE
      WHEN d.output_normalizado IS NOT NULL
       AND jsonb_typeof(d.output_normalizado->'probabilidades') = 'object'
       AND (d.output_normalizado->'probabilidades'->>c.classe) ~ '^[0-9]+(\.[0-9]+)?$'
      THEN (d.output_normalizado->'probabilidades'->>c.classe)::numeric
      WHEN COALESCE(d.predicao, a.classe_predita) = c.classe THEN COALESCE(d.confianca, CASE WHEN a.ia_estava_correta THEN 1 ELSE 0 END::numeric)
      ELSE GREATEST(0, (1 - COALESCE(d.confianca, CASE WHEN a.ia_estava_correta THEN 1 ELSE 0 END::numeric)) / 4.0)
    END AS score_classe,
    d.prompt_version,
    d.modelo_ia,
    d.versao_modelo,
    a.avaliado_em
  FROM aval a
  CROSS JOIN classes c
  LEFT JOIN LATERAL (
    SELECT predicao, confianca, output_normalizado, prompt_version, modelo_ia, versao_modelo
    FROM ia_decisoes d
    WHERE d.ticket_id = a.ticket_id
      AND d.etapa = 'CLASSIFICACAO'
      AND d.erro_ia = FALSE
    ORDER BY d.criado_em DESC, d.id DESC
    LIMIT 1
  ) d ON TRUE
)
SELECT
  ticket_id,
  classe,
  classe_correta,
  classe_predita,
  classe_positiva,
  LEAST(0.999999, GREATEST(0.000001, COALESCE(score_classe, 0.000001))) AS score_classe,
  confianca_decisao,
  prompt_version,
  modelo_ia,
  versao_modelo,
  avaliado_em
FROM base;

CREATE OR REPLACE VIEW vw_metricas_assertividade_classificacao AS
WITH metricas AS (
  SELECT
    classe,
    COUNT(*)::numeric AS total,
    COUNT(*) FILTER (WHERE classe_positiva = TRUE AND classe_predita = classe)::numeric AS tp,
    COUNT(*) FILTER (WHERE classe_positiva = FALSE AND classe_predita = classe)::numeric AS fp,
    COUNT(*) FILTER (WHERE classe_positiva = TRUE AND classe_predita <> classe)::numeric AS fn,
    COUNT(*) FILTER (WHERE classe_positiva = FALSE AND classe_predita <> classe)::numeric AS tn
  FROM vw_scores_classificacao
  GROUP BY classe
)
SELECT
  classe,
  total::int,
  tp::int,
  fp::int,
  fn::int,
  tn::int,
  ROUND((tp + tn) / NULLIF(total, 0), 4) AS acuracia,
  ROUND(tp / NULLIF(tp + fp, 0), 4) AS precisao,
  ROUND(tp / NULLIF(tp + fn, 0), 4) AS recall_sensitivity,
  ROUND(tn / NULLIF(tn + fp, 0), 4) AS especificidade,
  ROUND((2 * tp) / NULLIF((2 * tp) + fp + fn, 0), 4) AS f1_score
FROM metricas;

CREATE OR REPLACE VIEW vw_roc_classificacao AS
WITH thresholds AS (
  SELECT classe, score_classe AS threshold FROM vw_scores_classificacao
  UNION
  SELECT DISTINCT classe, 0::numeric AS threshold FROM vw_scores_classificacao
  UNION
  SELECT DISTINCT classe, 1::numeric AS threshold FROM vw_scores_classificacao
)
SELECT
  t.classe,
  t.threshold,
  ROUND(COUNT(*) FILTER (WHERE s.classe_positiva = TRUE AND s.score_classe >= t.threshold)::numeric / NULLIF(COUNT(*) FILTER (WHERE s.classe_positiva = TRUE), 0), 6) AS recall_tpr,
  ROUND(COUNT(*) FILTER (WHERE s.classe_positiva = FALSE AND s.score_classe >= t.threshold)::numeric / NULLIF(COUNT(*) FILTER (WHERE s.classe_positiva = FALSE), 0), 6) AS falso_positivo_fpr,
  COUNT(*) FILTER (WHERE s.classe_positiva = TRUE)::int AS positivos,
  COUNT(*) FILTER (WHERE s.classe_positiva = FALSE)::int AS negativos
FROM thresholds t
JOIN vw_scores_classificacao s ON s.classe = t.classe
GROUP BY t.classe, t.threshold;

CREATE OR REPLACE VIEW vw_auc_classificacao AS
WITH ordenado AS (
  SELECT
    classe,
    falso_positivo_fpr,
    recall_tpr,
    LAG(falso_positivo_fpr) OVER (PARTITION BY classe ORDER BY falso_positivo_fpr, recall_tpr) AS prev_fpr,
    LAG(recall_tpr) OVER (PARTITION BY classe ORDER BY falso_positivo_fpr, recall_tpr) AS prev_tpr
  FROM vw_roc_classificacao
  WHERE falso_positivo_fpr IS NOT NULL
    AND recall_tpr IS NOT NULL
),
auc AS (
  SELECT
    classe,
    SUM((falso_positivo_fpr - prev_fpr) * (recall_tpr + prev_tpr) / 2.0) AS auc_roc
  FROM ordenado
  WHERE prev_fpr IS NOT NULL
    AND prev_tpr IS NOT NULL
  GROUP BY classe
)
SELECT classe, ROUND(auc_roc, 6) AS auc_roc
FROM auc;

CREATE OR REPLACE VIEW vw_log_loss_classificacao AS
WITH por_classe AS (
  SELECT
    classe,
    COUNT(*)::int AS total_avaliado,
    ROUND(AVG(
      CASE
        WHEN classe_positiva THEN -LN(score_classe)
        ELSE -LN(1 - score_classe)
      END
    ), 6) AS log_loss_binario
  FROM vw_scores_classificacao
  GROUP BY classe
)
SELECT classe, total_avaliado, log_loss_binario
FROM por_classe
UNION ALL
SELECT 'MACRO' AS classe, SUM(total_avaliado)::int AS total_avaliado, ROUND(AVG(log_loss_binario), 6) AS log_loss_binario
FROM por_classe;

CREATE OR REPLACE VIEW vw_confianca_ia AS
SELECT
  etapa,
  LEAST(10, GREATEST(1, CEIL(COALESCE(confianca, 0) * 10)::int)) AS faixa_confianca,
  COUNT(*)::int AS total,
  ROUND(AVG(confianca), 4) AS confianca_media,
  COUNT(*) FILTER (WHERE erro_ia = TRUE)::int AS erros_ia
FROM ia_decisoes
GROUP BY etapa, LEAST(10, GREATEST(1, CEIL(COALESCE(confianca, 0) * 10)::int));

CREATE OR REPLACE VIEW vw_erros_ia AS
SELECT ticket_id, workflow_origem, etapa, predicao, confianca, mensagem_erro, criado_em
FROM ia_decisoes
WHERE erro_ia = TRUE
UNION ALL
SELECT ticket_id, 'AVALIACAO_HUMANA', etapa, decisao_ia, NULL::numeric, tipo_erro, avaliado_em
FROM avaliacoes_humanas
WHERE ia_estava_correta = FALSE;

CREATE OR REPLACE VIEW vw_chamados_travados AS
SELECT
  id AS ticket_id,
  titulo,
  status_nome,
  triagem_status,
  classificacao_final,
  em_aprovacao_fiscal,
  ultima_acao_workflow,
  COALESCE(aprovacao_iniciada_em, triado_em, atualizado_em, criado_em) AS desde,
  ROUND(EXTRACT(EPOCH FROM (NOW() - COALESCE(aprovacao_iniciada_em, triado_em, atualizado_em, criado_em))) / 3600.0, 2) AS horas_parado
FROM tickets_processados
WHERE (
  em_aprovacao_fiscal = TRUE
  OR triagem_status IN ('TRIAGEM_MANUAL','ERRO_IA','REPROCESSAR_IA')
  OR ultima_acao_workflow IN ('AGUARDANDO_FISCAL','ERRO_IA_DEDUP','ERRO_IA_CLASSIF')
)
AND COALESCE(aprovacao_iniciada_em, triado_em, atualizado_em, criado_em) < NOW() - INTERVAL '24 hours';

CREATE OR REPLACE VIEW vw_tempo_execucao_workflow AS
SELECT
  workflow,
  COALESCE(fase, '') AS fase,
  COUNT(*)::int AS total_eventos,
  COUNT(*) FILTER (WHERE erro = TRUE)::int AS total_erros,
  ROUND(AVG(duracao_ms), 2) AS duracao_media_ms,
  percentile_cont(0.95) WITHIN GROUP (ORDER BY duracao_ms) AS duracao_p95_ms
FROM workflow_eventos
GROUP BY workflow, COALESCE(fase, '');

CREATE OR REPLACE VIEW vw_comparacao_prompt_modelo AS
SELECT
  etapa,
  prompt_version,
  modelo_ia,
  versao_modelo,
  COUNT(*)::int AS total_decisoes,
  COUNT(*) FILTER (WHERE erro_ia = TRUE)::int AS total_erros_ia,
  ROUND(AVG(confianca), 4) AS confianca_media,
  ROUND(AVG(tempo_resposta_ms), 2) AS tempo_medio_ia_ms
FROM ia_decisoes
GROUP BY etapa, prompt_version, modelo_ia, versao_modelo;

CREATE OR REPLACE VIEW vw_candidatos_automacao_total AS
SELECT
  d.ticket_id,
  d.etapa,
  d.predicao,
  d.confianca,
  d.prompt_version,
  d.modelo_ia,
  d.versao_modelo,
  d.justificativa,
  d.criado_em
FROM ia_decisoes d
WHERE d.erro_ia = FALSE
  AND COALESCE(d.confianca, 0) >= 0.95
  AND d.predicao IN ('DEMO','SOB_DEMANDA','NAO_DUPLICADO')
  AND NOT EXISTS (
    SELECT 1
    FROM avaliacoes_humanas a
    WHERE a.ticket_id = d.ticket_id
      AND a.etapa = d.etapa
      AND a.ia_estava_correta = FALSE
  );
"""


CONSOLIDATE_SQL_EXPR = r"""={{ (() => {
const erroLimite = Number($env.METRICAS_ALERTA_ERRO_IA_PERCENT || 5);
const manualLimite = Number($env.METRICAS_ALERTA_TRIAGEM_MANUAL_PERCENT || 25);
const travadosLimite = Number($env.METRICAS_ALERTA_CHAMADOS_TRAVADOS || 10);
return `
WITH base AS (
  SELECT
    CURRENT_DATE AS data_ref,
    COUNT(*)::int AS total_chamados_processados,
    COUNT(*) FILTER (WHERE classificacao_final IN ('OBRA','DEMO','SOB_DEMANDA','DUPLICADO'))::int AS total_classificados_automaticamente,
    COUNT(*) FILTER (WHERE classificacao_final='TRIAGEM_MANUAL' OR triagem_manual=TRUE)::int AS total_enviados_triagem_manual,
    COUNT(*) FILTER (WHERE triagem_status='ERRO_IA' OR ultimo_erro_ia IS NOT NULL)::int AS total_com_erro_ia,
    COUNT(*) FILTER (WHERE em_aprovacao_fiscal=TRUE)::int AS total_aguardando_fiscal,
    ROUND(AVG(EXTRACT(EPOCH FROM (triado_em - data_abertura)) / 60.0) FILTER (WHERE triado_em IS NOT NULL AND data_abertura IS NOT NULL AND triado_em >= data_abertura), 2) AS tempo_medio_triagem_min,
    COUNT(*) FILTER (
      WHERE (
        em_aprovacao_fiscal = TRUE
        OR triagem_status IN ('TRIAGEM_MANUAL','ERRO_IA','REPROCESSAR_IA')
        OR ultima_acao_workflow IN ('AGUARDANDO_FISCAL','ERRO_IA_DEDUP','ERRO_IA_CLASSIF')
      )
      AND COALESCE(aprovacao_iniciada_em, triado_em, atualizado_em, criado_em) < NOW() - INTERVAL '24 hours'
    )::int AS chamados_travados_24h
  FROM tickets_processados
),
kpi AS (
  SELECT
    *,
    ROUND(100.0 * (total_enviados_triagem_manual + total_aguardando_fiscal) / NULLIF(total_chamados_processados,0), 4) AS taxa_intervencao_humana,
    ROUND(100.0 * total_classificados_automaticamente / NULLIF(total_chamados_processados,0), 4) AS taxa_automacao_efetiva,
    ROUND(100.0 * total_com_erro_ia / NULLIF(total_chamados_processados,0), 4) AS taxa_erro_ia,
    ROUND(100.0 * total_enviados_triagem_manual / NULLIF(total_chamados_processados,0), 4) AS taxa_triagem_manual
  FROM base
),
upsert_diario AS (
  INSERT INTO metricas_diarias_automacao(
    data_ref,total_chamados_processados,total_classificados_automaticamente,total_enviados_triagem_manual,
    total_com_erro_ia,total_aguardando_fiscal,tempo_medio_triagem_min,taxa_intervencao_humana,
    taxa_automacao_efetiva,taxa_erro_ia,taxa_triagem_manual,chamados_travados_24h,atualizado_em
  )
  SELECT
    data_ref,total_chamados_processados,total_classificados_automaticamente,total_enviados_triagem_manual,
    total_com_erro_ia,total_aguardando_fiscal,tempo_medio_triagem_min,taxa_intervencao_humana,
    taxa_automacao_efetiva,taxa_erro_ia,taxa_triagem_manual,chamados_travados_24h,NOW()
  FROM kpi
  ON CONFLICT(data_ref) DO UPDATE SET
    total_chamados_processados=EXCLUDED.total_chamados_processados,
    total_classificados_automaticamente=EXCLUDED.total_classificados_automaticamente,
    total_enviados_triagem_manual=EXCLUDED.total_enviados_triagem_manual,
    total_com_erro_ia=EXCLUDED.total_com_erro_ia,
    total_aguardando_fiscal=EXCLUDED.total_aguardando_fiscal,
    tempo_medio_triagem_min=EXCLUDED.tempo_medio_triagem_min,
    taxa_intervencao_humana=EXCLUDED.taxa_intervencao_humana,
    taxa_automacao_efetiva=EXCLUDED.taxa_automacao_efetiva,
    taxa_erro_ia=EXCLUDED.taxa_erro_ia,
    taxa_triagem_manual=EXCLUDED.taxa_triagem_manual,
    chamados_travados_24h=EXCLUDED.chamados_travados_24h,
    atualizado_em=NOW()
  RETURNING *
),
prompt_metrics AS (
  INSERT INTO metricas_prompt_version(
    data_ref, etapa, prompt_version, modelo_ia, versao_modelo, total_decisoes,
    total_erros_ia, confianca_media, tempo_medio_ia_ms, acuracia_avaliada, atualizado_em
  )
  SELECT
    CURRENT_DATE,
    d.etapa,
    COALESCE(prompt_version, 'nao_informado'),
    COALESCE(modelo_ia, 'nao_informado'),
    COALESCE(versao_modelo, 'nao_informado'),
    COUNT(*)::int,
    COUNT(*) FILTER (WHERE erro_ia=TRUE)::int,
    ROUND(AVG(confianca), 4),
    ROUND(AVG(tempo_resposta_ms), 2),
    ROUND(AVG((a.ia_estava_correta::int)::numeric) FILTER (WHERE a.ia_estava_correta IS NOT NULL), 4),
    NOW()
  FROM ia_decisoes d
  LEFT JOIN avaliacoes_humanas a ON a.ticket_id=d.ticket_id AND a.etapa=d.etapa
  WHERE d.criado_em >= CURRENT_DATE
  GROUP BY d.etapa, COALESCE(prompt_version, 'nao_informado'), COALESCE(modelo_ia, 'nao_informado'), COALESCE(versao_modelo, 'nao_informado')
  ON CONFLICT(data_ref, etapa, prompt_version, modelo_ia, versao_modelo) DO UPDATE SET
    total_decisoes=EXCLUDED.total_decisoes,
    total_erros_ia=EXCLUDED.total_erros_ia,
    confianca_media=EXCLUDED.confianca_media,
    tempo_medio_ia_ms=EXCLUDED.tempo_medio_ia_ms,
    acuracia_avaliada=EXCLUDED.acuracia_avaliada,
    atualizado_em=NOW()
  RETURNING 1
),
workflow_perf AS (
  INSERT INTO metricas_workflow_performance(data_ref, workflow, fase, total_eventos, total_erros, duracao_media_ms, duracao_p95_ms, atualizado_em)
  SELECT
    CURRENT_DATE,
    workflow,
    COALESCE(fase, ''),
    COUNT(*)::int,
    COUNT(*) FILTER (WHERE erro=TRUE)::int,
    ROUND(AVG(duracao_ms), 2),
    percentile_cont(0.95) WITHIN GROUP (ORDER BY duracao_ms),
    NOW()
  FROM workflow_eventos
  WHERE criado_em >= CURRENT_DATE
  GROUP BY workflow, COALESCE(fase, '')
  ON CONFLICT(data_ref, workflow, fase) DO UPDATE SET
    total_eventos=EXCLUDED.total_eventos,
    total_erros=EXCLUDED.total_erros,
    duracao_media_ms=EXCLUDED.duracao_media_ms,
    duracao_p95_ms=EXCLUDED.duracao_p95_ms,
    atualizado_em=NOW()
  RETURNING 1
),
evento AS (
  INSERT INTO workflow_eventos(workflow,node_name,fase,acao,status_evento,inicio_em,fim_em,duracao_ms)
  VALUES('WF05','PG: Consolidar Metricas','CONSOLIDACAO','CONSOLIDAR_METRICAS','OK',NOW(),NOW(),0)
  RETURNING 1
)
SELECT
  *,
  (COALESCE(taxa_erro_ia,0) > ${erroLimite}
   OR COALESCE(taxa_triagem_manual,0) > ${manualLimite}
   OR COALESCE(chamados_travados_24h,0) > ${travadosLimite}) AS gerar_alerta,
  ${erroLimite}::numeric AS limite_erro_ia_percent,
  ${manualLimite}::numeric AS limite_triagem_manual_percent,
  ${travadosLimite}::int AS limite_chamados_travados
FROM upsert_diario;`;
})() }}"""


HUMAN_REVIEW_SAMPLE_SQL_EXPR = r"""={{ (() => {
const pctRaw = Number($env.AVALIACAO_HUMANA_AMOSTRA_PERCENT || 20);
const minRaw = Number($env.AVALIACAO_HUMANA_AMOSTRA_MIN || 30);
const limitRaw = Number($env.AVALIACAO_HUMANA_AMOSTRA_LIMIT || 30);
const ttlRaw = Number($env.AVALIACAO_HUMANA_TOKEN_TTL_DIAS || 30);
const pct = Number.isFinite(pctRaw) && pctRaw > 0 && pctRaw <= 100 ? pctRaw : 20;
const min = Number.isFinite(minRaw) && minRaw >= 0 ? Math.floor(minRaw) : 30;
const limit = Number.isFinite(limitRaw) && limitRaw > 0 ? Math.floor(limitRaw) : 30;
const ttl = Number.isFinite(ttlRaw) && ttlRaw > 0 ? Math.floor(ttlRaw) : 30;
return `
WITH ultimas_decisoes AS (
  SELECT DISTINCT ON (ticket_id, etapa)
    id AS ia_decisao_id,
    ticket_id,
    etapa,
    predicao,
    confianca,
    prompt_version,
    run_id,
    case_id,
    episode_id,
    criado_em
  FROM ia_decisoes
  WHERE erro_ia = FALSE
    AND ticket_id IS NOT NULL
    AND etapa IN ('CLASSIFICACAO','DEDUPLICACAO')
  ORDER BY ticket_id, etapa, criado_em DESC, id DESC
),
candidatos_classificacao AS (
  SELECT d.*
  FROM ultimas_decisoes d
  JOIN tickets_processados t ON t.id = d.ticket_id
  WHERE d.etapa = 'CLASSIFICACAO'
    AND d.predicao IS NOT NULL
    AND NOT EXISTS (
      SELECT 1 FROM avaliacoes_humanas a
      WHERE a.ticket_id = d.ticket_id
        AND a.etapa = d.etapa
        AND COALESCE(a.status_avaliacao,'CONCLUIDA') IN ('PENDENTE','CONCLUIDA')
    )
),
candidatos_dedup AS (
  SELECT d.*
  FROM ultimas_decisoes d
  JOIN tickets_processados t ON t.id = d.ticket_id
  WHERE d.etapa = 'DEDUPLICACAO'
    AND d.predicao = 'NAO_DUPLICADO'
    AND NOT EXISTS (
      SELECT 1 FROM avaliacoes_humanas a
      WHERE a.ticket_id = d.ticket_id
        AND a.etapa = d.etapa
        AND COALESCE(a.status_avaliacao,'CONCLUIDA') IN ('PENDENTE','CONCLUIDA')
    )
),
limites AS (
  SELECT
    LEAST(${limit}, GREATEST(${min}, CEIL((SELECT COUNT(*) FROM candidatos_classificacao) * ${pct} / 100.0)::int))::int AS limite_classificacao,
    LEAST(${limit}, GREATEST(${min}, CEIL((SELECT COUNT(*) FROM candidatos_dedup) * ${pct} / 100.0)::int))::int AS limite_dedup
),
amostra_classificacao AS (
  SELECT *
  FROM candidatos_classificacao
  ORDER BY random()
  LIMIT (SELECT limite_classificacao FROM limites)
),
amostra_dedup AS (
  SELECT *
  FROM candidatos_dedup
  ORDER BY random()
  LIMIT (SELECT limite_dedup FROM limites)
),
inseridos AS (
  INSERT INTO avaliacoes_humanas(
    ticket_id, etapa, decisao_ia, avaliacao_token, avaliacao_token_expira_em,
    status_avaliacao, origem_amostra, solicitado_em, observacao,
    run_id,case_id,episode_id
  )
  SELECT
    ticket_id,
    etapa,
    predicao,
    replace(gen_random_uuid()::text,'-',''),
    NOW() + (${ttl} || ' days')::interval,
    'PENDENTE',
    CASE WHEN etapa='CLASSIFICACAO' THEN 'WF05_AMOSTRA_CLASSIFICACAO' ELSE 'WF05_AMOSTRA_DEDUP_RECALL' END,
    NOW(),
    jsonb_build_object('ia_decisao_id',ia_decisao_id,'confianca',confianca,'prompt_version',prompt_version)::text,
    run_id,case_id,episode_id
  FROM (
    SELECT * FROM amostra_classificacao
    UNION ALL
    SELECT * FROM amostra_dedup
  ) s
  ON CONFLICT DO NOTHING
  RETURNING id, ticket_id, etapa, decisao_ia, avaliacao_token, avaliacao_token_expira_em, origem_amostra
),
evento AS (
  INSERT INTO workflow_eventos(workflow,node_name,fase,acao,status_evento,inicio_em,fim_em,duracao_ms)
  VALUES('WF05','PG: Selecionar Avaliações Humanas','AVALIACAO_HUMANA','AMOSTRA_AVALIACAO','OK',NOW(),NOW(),0)
  RETURNING 1
)
SELECT
  i.id AS avaliacao_id,
  i.ticket_id,
  i.etapa,
  i.decisao_ia,
  i.avaliacao_token,
  i.avaliacao_token_expira_em,
  i.origem_amostra,
  t.titulo,
  t.status_nome,
  t.classificacao_final,
  t.duplicado_de_id
FROM inseridos i
JOIN tickets_processados t ON t.id = i.ticket_id
ORDER BY i.id;`;
})() }}"""


REQUEST_HUMAN_REVIEW_JS = r"""
const rows = $input.all().map(i => i.json || {}).filter(r => r.ticket_id && r.avaliacao_token);
if (rows.length === 0) {
  console.log('[WF05][LOG] Nenhuma avaliacao humana nova para solicitar.');
  return [{json:{ok:true,total_solicitado:0}}];
}
const apiBase = String((typeof process !== 'undefined' && process.env.GLPI_API_URL) || 'http://host.docker.internal:9080/apirest.php').replace(/\/$/, '');
const appToken = String((typeof process !== 'undefined' && process.env.GLPI_APP_TOKEN) || '');
const auth = String((typeof process !== 'undefined' && process.env.GLPI_AUTH_BASIC) || 'Basic ');
const publicBase = String((typeof process !== 'undefined' && process.env.AVALIACAO_HUMANA_CONFIRMATION_BASE_URL) || ((typeof process !== 'undefined' && process.env.N8N_PUBLIC_BASE_URL) || 'http://localhost:5678') + '/webhook/avaliacao-humana-confirmacao-v9').replace(/\/$/, '');
function enc(v){ return encodeURIComponent(String(v ?? '')); }
function link(token, resultado, classe) {
  let url = publicBase + '?token=' + enc(token) + '&resultado=' + enc(resultado);
  if (classe) url += '&classe_correta=' + enc(classe);
  return url;
}
function correctionLinks(row) {
  if (row.etapa === 'DEDUPLICACAO') {
    return [
      'Confirmar que NAO era duplicado: ' + link(row.avaliacao_token, 'correta', ''),
      'Marcar como duplicado nao detectado: ' + link(row.avaliacao_token, 'incorreta', 'DUPLICADO')
    ].join('\n');
  }
  const classes = ['OBRA','DEMO','SOB_DEMANDA','DEMO_SEM_EQUIPE','TRIAGEM_MANUAL'];
  const out = ['Confirmar classificacao da IA: ' + link(row.avaliacao_token, 'correta', '')];
  for (const c of classes) out.push('Corrigir para ' + c + ': ' + link(row.avaliacao_token, 'incorreta', c));
  return out.join('\n');
}
const init = await helpers.httpRequest({
  method: 'GET',
  url: apiBase + '/initSession',
  headers: {'App-Token': appToken, 'Authorization': auth, 'Content-Type': 'application/json'},
  json: true
});
const sessionToken = String(init.session_token || '');
if (!sessionToken) throw new Error('GLPI initSession sem session_token no WF05 avaliacao humana');
const headers = {'App-Token': appToken, 'Session-Token': sessionToken, 'Content-Type': 'application/json'};
let enviados = 0;
let falhas = 0;
for (const row of rows) {
  const titulo = String(row.titulo || '').slice(0, 180);
  const validade = row.avaliacao_token_expira_em ? String(row.avaliacao_token_expira_em) : 'nao informada';
  const content = [
    '[AVALIACAO_HUMANA]',
    'Solicitacao de validacao para pesquisa/metricas da automacao.',
    'Etapa: ' + row.etapa,
    'Decisao da IA: ' + (row.decisao_ia || 'N/A'),
    'Chamado: #' + row.ticket_id + ' - ' + titulo,
    'Validade do link: ' + validade,
    '',
    correctionLinks(row)
  ].join('\n');
  try {
    await helpers.httpRequest({
      method: 'POST',
      url: apiBase + '/Ticket/' + Number(row.ticket_id) + '/ITILFollowup',
      headers,
      body: {input:{items_id:Number(row.ticket_id), content}},
      json: true
    });
    enviados++;
  } catch (e) {
    falhas++;
    console.log('[WF05][LOG] Falha ao solicitar avaliacao humana #' + row.ticket_id + ': ' + e.message);
  }
}
try {
  await helpers.httpRequest({method:'GET', url: apiBase + '/killSession', headers, json:true});
} catch (e) {}
console.log('[WF05][LOG] Avaliacoes humanas solicitadas=' + enviados + ' falhas=' + falhas);
return [{json:{ok:falhas===0,total_solicitado:enviados,total_falhas:falhas,total_candidatos:rows.length}}];
"""


EXTRACT_HUMAN_REVIEW_JS = r"""
const q = {...($json.query || {}),...($json.body || {})};
const headers = $json.headers || {};
const token = String(q.token || '').trim();
const resultado = String(q.resultado || '').toLowerCase().trim();
const classe = String(q.classe_correta || '').toUpperCase().trim();
const fonteSolicitada = String(q.fonte || '').toUpperCase().trim();
const oraculo = fonteSolicitada === 'ORACULO_GABARITO';
const runId = String(q.run_id || headers['x-test-run-id'] || '').trim();
const scenarioId = String(q.scenario_id || headers['x-test-scenario-id'] || '').trim();
const realizationId = String(q.realization_id || headers['x-test-realization-id'] || '').trim();
const nonce = String(headers['x-test-auto-review-nonce'] || '').trim();
const receivedSecret = String(headers['x-test-auto-review-token'] || '').trim();
const expectedSecret = String(
  (typeof $env!=='undefined' && $env.TEST_AUTO_REVIEW_TOKEN) ||
  (typeof process!=='undefined' && process.env.TEST_AUTO_REVIEW_TOKEN) || ''
);
const flag = name => {
  let value='';
  try { value=String((typeof $env!=='undefined' && $env[name]) || (typeof process!=='undefined' && process.env[name]) || ''); } catch(e) {}
  return value.trim().toLowerCase()==='true';
};
function sameSecret(a,b) {
  if (a.length!==b.length || a.length<32) return false;
  let diff=0; for (let i=0;i<a.length;i++) diff|=a.charCodeAt(i)^b.charCodeAt(i);
  return diff===0;
}
const idsOk = /^[A-Za-z0-9][A-Za-z0-9._:-]{2,127}$/.test(runId)
  && /^[A-Za-z0-9][A-Za-z0-9_-]{0,63}$/.test(scenarioId)
  && /^[A-Za-z0-9][A-Za-z0-9._:-]{2,127}$/.test(realizationId);
const oracleAuthOk = !oraculo || (
  flag('TEST_MODE') && flag('TEST_AUTO_HUMAN_CONFIRMATION') &&
  sameSecret(expectedSecret,receivedSecret) && /^[a-f0-9]{32}$/i.test(nonce) && idsOk
);
let avaliador = oraculo ? 'oraculo_gabarito' : String(q.avaliador || 'fiscal_glpi').trim();
if (!oraculo && avaliador.toLowerCase().includes('oraculo')) avaliador='fiscal_glpi';
const motivo = String(q.motivo || '').trim();
const tokenOk = /^[a-f0-9]{32,128}$/i.test(token);
const resultadoOk = ['correta','incorreta'].includes(resultado);
const ok = tokenOk && resultadoOk && oracleAuthOk;
let msg = '';
if (!tokenOk) msg = 'Token de avaliacao ausente ou invalido.';
else if (!resultadoOk) msg = 'Resultado de avaliacao invalido.';
else if (!oracleAuthOk) msg = 'Origem ORACULO_GABARITO nao autorizada.';
return [{json:{
  ok,token:tokenOk?token:null,resultado,classe_correta:classe,avaliador,motivo,msg,
  fonte_gabarito:oraculo?'ORACULO_GABARITO':'REVISAO_HUMANA',oraculo,
  run_id:oraculo?runId:null,scenario_id:oraculo?scenarioId:null,
  realization_id:oraculo?realizationId:null,assessor_nonce:oraculo?nonce:null
}}];
"""


REGISTER_HUMAN_REVIEW_SQL_EXPR = r"""={{ (() => {
const d = $('Extrair Avaliação Humana').first().json || {};
const esc = s => "'" + String(s ?? '').replace(/'/g,"''") + "'";
if (d.ok !== true) {
  return `SELECT 400::int AS http_status, ${esc(d.msg || 'Avaliacao invalida.')} AS mensagem;`;
}
const token = esc(d.token);
const resultado = String(d.resultado || '').toLowerCase();
const correta = resultado === 'correta';
const classe = d.classe_correta ? esc(d.classe_correta) : 'NULL';
const avaliador = esc(d.avaliador || 'fiscal_glpi');
const motivo = d.motivo ? esc(d.motivo) : 'NULL';
const oraculo = d.oraculo === true;
const runId = d.run_id ? esc(d.run_id) : 'NULL';
const scenarioId = d.scenario_id ? esc(d.scenario_id) : 'NULL';
const realizationId = d.realization_id ? esc(d.realization_id) : 'NULL';
const nonce = d.assessor_nonce ? esc(d.assessor_nonce) : 'NULL';
const fonte = esc(oraculo ? 'ORACULO_GABARITO' : 'REVISAO_HUMANA');
return `
WITH alvo AS (
  SELECT *
  FROM avaliacoes_humanas
  WHERE avaliacao_token = ${token}
  LIMIT 1
),
contexto_oraculo AS (
  SELECT
    dc.run_id,dc.scenario_id,dc.case_id AS realization_id,
    i.id AS ia_decisao_id,i.predicao,
    CASE WHEN a.etapa='DEDUPLICACAO'
      THEN CASE WHEN dc.duplicado_esperado THEN 'DUPLICADO' ELSE 'NAO_DUPLICADO' END
      ELSE dc.classificacao_esperada END AS classe_gabarito,
    (i.predicao=(CASE WHEN a.etapa='DEDUPLICACAO'
      THEN CASE WHEN dc.duplicado_esperado THEN 'DUPLICADO' ELSE 'NAO_DUPLICADO' END
      ELSE dc.classificacao_esperada END)) AS ia_correta
  FROM alvo a
  JOIN dataset_controle dc ON dc.ticket_id=a.ticket_id
  JOIN experimentos_avaliacao e ON e.run_id=dc.run_id
  JOIN LATERAL (
    SELECT id,predicao,criado_em
    FROM ia_decisoes i
    WHERE i.ticket_id=a.ticket_id AND i.run_id=dc.run_id
      AND i.case_id=dc.case_id AND i.etapa=a.etapa
      AND i.criado_em<=COALESCE(a.solicitado_em,NOW())
    ORDER BY i.criado_em DESC,i.id DESC LIMIT 1
  ) i ON TRUE
  WHERE ${oraculo ? 'TRUE' : 'FALSE'}
    AND dc.run_id=${runId} AND dc.scenario_id=${scenarioId} AND dc.case_id=${realizationId}
    AND length(dc.run_id) BETWEEN 3 AND 128
    AND left(dc.run_id,1) ~ '[A-Za-z0-9]'
    AND dc.run_id !~ '[^A-Za-z0-9._:-]'
    AND length(dc.scenario_id) BETWEEN 1 AND 64
    AND left(dc.scenario_id,1) ~ '[A-Za-z0-9]'
    AND dc.scenario_id !~ '[^A-Za-z0-9_-]'
    AND length(dc.case_id) BETWEEN 3 AND 128
    AND left(dc.case_id,1) ~ '[A-Za-z0-9]'
    AND dc.case_id !~ '[^A-Za-z0-9._:-]'
    AND UPPER(COALESCE(dc.split,'')) IN ('PILOTO','VALIDACAO','TESTE','TEST','BENCHMARK')
    AND COALESCE(dc.origem,'') ~ '^(AVALIACAO_|VALIDACAO_|DATASET_)'
    AND COALESCE(dc.label_source,'') ~ '^(REGRA_SINTETICA|SYNTHETIC_|ADJUDICADO_|GABARITO_)'
    AND LOWER(COALESCE(e.generation_config->>'test_mode','false'))='true'
    AND LOWER(COALESCE(e.generation_config->>'auto_human_confirmation','false'))='true'
    AND a.decisao_ia=i.predicao
    AND (CASE WHEN a.etapa='DEDUPLICACAO'
      THEN CASE WHEN dc.duplicado_esperado IS NULL THEN NULL
        WHEN dc.duplicado_esperado THEN 'DUPLICADO' ELSE 'NAO_DUPLICADO' END
      ELSE NULLIF(dc.classificacao_esperada,'') END) IS NOT NULL
    AND ${esc(resultado)}=(CASE WHEN i.predicao=(CASE WHEN a.etapa='DEDUPLICACAO'
      THEN CASE WHEN dc.duplicado_esperado THEN 'DUPLICADO' ELSE 'NAO_DUPLICADO' END
      ELSE dc.classificacao_esperada END) THEN 'correta' ELSE 'incorreta' END)
    AND (
      ${esc(resultado)}='correta'
      OR ${classe}=(CASE WHEN a.etapa='DEDUPLICACAO'
        THEN CASE WHEN dc.duplicado_esperado THEN 'DUPLICADO' ELSE 'NAO_DUPLICADO' END
        ELSE dc.classificacao_esperada END)
    )
    AND EXISTS (
      SELECT 1 FROM avaliacao_auto_confirmacoes ac
      WHERE ac.avaliacao_id=a.id AND ac.run_id=dc.run_id
        AND ac.scenario_id=dc.scenario_id AND ac.realization_id=dc.case_id
        AND ac.tipo_confirmacao='AVALIACAO_METRICA' AND ac.etapa=a.etapa
        AND ac.ia_decisao_id=i.id AND ac.status='RESERVADA'
        AND ac.predicao_ia=i.predicao
        AND ac.classe_gabarito=(CASE WHEN a.etapa='DEDUPLICACAO'
          THEN CASE WHEN dc.duplicado_esperado THEN 'DUPLICADO' ELSE 'NAO_DUPLICADO' END
          ELSE dc.classificacao_esperada END)
        AND ac.decisao_webhook=${esc(resultado)}
        AND ac.token_hash=encode(sha256(convert_to(a.avaliacao_token,'UTF8')),'hex')
        AND ac.assessor_nonce_hash=encode(sha256(convert_to(${nonce},'UTF8')),'hex')
    )
),
atualizado AS (
  UPDATE avaliacoes_humanas a
  SET
    status_avaliacao = 'CONCLUIDA',
    ia_estava_correta = CASE WHEN ${oraculo ? 'TRUE' : 'FALSE'}
      THEN (SELECT ia_correta FROM contexto_oraculo)
      ELSE ${correta ? 'TRUE' : 'FALSE'} END,
    decisao_humana = CASE
      WHEN ${oraculo ? 'TRUE' : 'FALSE'} THEN (SELECT classe_gabarito FROM contexto_oraculo)
      WHEN ${correta ? 'TRUE' : 'FALSE'} THEN a.decisao_ia
      ELSE COALESCE(${classe}, a.decisao_humana, 'CORRIGIR_MANUAL')
    END,
    classe_correta = CASE
      WHEN ${oraculo ? 'TRUE' : 'FALSE'} THEN (SELECT classe_gabarito FROM contexto_oraculo)
      WHEN ${correta ? 'TRUE' : 'FALSE'} THEN COALESCE(a.classe_correta, a.decisao_ia)
      ELSE COALESCE(${classe}, a.classe_correta)
    END,
    avaliador = ${avaliador},
    fonte_gabarito = ${fonte},
    motivo_divergencia = ${motivo},
    concluido_em = NOW(),
    avaliado_em = NOW(),
    observacao = COALESCE(a.observacao,'')
      || CASE WHEN ${oraculo ? 'TRUE' : 'FALSE'} THEN E'\n[ORACULO_GABARITO] Confirmacao automatica test-only autenticada.' ELSE '' END
      || CASE WHEN ${motivo} IS NULL THEN '' ELSE E'\n' || ${motivo} END
  WHERE a.id = (SELECT id FROM alvo)
    AND COALESCE(a.status_avaliacao,'PENDENTE') = 'PENDENTE'
    AND (a.avaliacao_token_expira_em IS NULL OR a.avaliacao_token_expira_em > NOW())
    AND (NOT ${oraculo ? 'TRUE' : 'FALSE'} OR EXISTS (SELECT 1 FROM contexto_oraculo))
  RETURNING a.id, a.ticket_id, a.etapa, a.decisao_ia, a.decisao_humana, a.classe_correta
),
evento_ok AS (
  INSERT INTO workflow_eventos(ticket_id,workflow,node_name,fase,acao,status_evento,erro,mensagem_erro,inicio_em,fim_em)
  SELECT ticket_id,'WF05','PG: Registrar Avaliação Humana','AVALIACAO_HUMANA',
         CASE WHEN ${oraculo ? 'TRUE' : 'FALSE'} THEN 'ORACULO_GABARITO'
              WHEN ${correta ? 'TRUE' : 'FALSE'} THEN 'IA_CORRETA' ELSE 'IA_CORRIGIDA' END,
         'OK',FALSE,NULL,NOW(),NOW()
  FROM atualizado
  RETURNING 1
)
SELECT
  200::int AS http_status,
  ('Avaliacao registrada para o chamado #' || ticket_id || '.')::text AS mensagem,
  ticket_id,
  etapa,
  decisao_ia,
  decisao_humana,
  classe_correta
FROM atualizado
UNION ALL
SELECT
  CASE
    WHEN NOT EXISTS (SELECT 1 FROM alvo) THEN 404
    WHEN ${oraculo ? 'TRUE' : 'FALSE'} AND NOT EXISTS (SELECT 1 FROM contexto_oraculo) THEN 403
    WHEN EXISTS (SELECT 1 FROM alvo WHERE COALESCE(status_avaliacao,'PENDENTE') <> 'PENDENTE') THEN 200
    WHEN EXISTS (SELECT 1 FROM alvo WHERE avaliacao_token_expira_em IS NOT NULL AND avaliacao_token_expira_em <= NOW()) THEN 410
    ELSE 409
  END::int AS http_status,
  CASE
    WHEN NOT EXISTS (SELECT 1 FROM alvo) THEN 'Token de avaliacao nao encontrado.'
    WHEN ${oraculo ? 'TRUE' : 'FALSE'} AND NOT EXISTS (SELECT 1 FROM contexto_oraculo) THEN 'Confirmacao automatica sem reserva ou contexto experimental valido.'
    WHEN EXISTS (SELECT 1 FROM alvo WHERE COALESCE(status_avaliacao,'PENDENTE') <> 'PENDENTE') THEN 'Avaliacao ja registrada anteriormente.'
    WHEN EXISTS (SELECT 1 FROM alvo WHERE avaliacao_token_expira_em IS NOT NULL AND avaliacao_token_expira_em <= NOW()) THEN 'Token de avaliacao expirado.'
    ELSE 'Avaliacao nao pode ser registrada.'
  END::text AS mensagem,
  (SELECT ticket_id FROM alvo),
  (SELECT etapa FROM alvo),
  (SELECT decisao_ia FROM alvo),
  NULL::text,
  NULL::text
WHERE NOT EXISTS (SELECT 1 FROM atualizado);`;
})() }}"""


WORKFLOW = {
    "name": "V9 - WF05 Métricas",
    "nodes": [
        {
            "parameters": {},
            "type": "n8n-nodes-base.manualTrigger",
            "typeVersion": 1,
            "position": [-800, 0],
            "id": "v9-wf05-manual",
            "name": "T1. Manual",
        },
        {
            "parameters": {"rule": {"interval": [{"field": "cronExpression", "expression": "0 23 * * *"}]}},
            "type": "n8n-nodes-base.scheduleTrigger",
            "typeVersion": 1.2,
            "position": [-800, 220],
            "id": "v9-wf05-schedule",
            "name": "T2. Schedule 23h",
        },
        {
            "parameters": {
                "jsCode": "const inicio=new Date(); console.log('[WF05][LOG] Inicio metricas V9'); return [{json:{inicio:inicio.toISOString(),fase:'WF05_INICIO'}}];"
            },
            "type": "n8n-nodes-base.code",
            "typeVersion": 2,
            "position": [-560, 110],
            "id": "v9-wf05-log-inicio",
            "name": "LOG: Início",
            "alwaysOutputData": True,
        },
        {
            "parameters": {"operation": "executeQuery", "query": OBSERVABILITY_SCHEMA_SQL + "\nSELECT 'schema_observabilidade_ok' AS result;", "options": {}},
            "type": "n8n-nodes-base.postgres",
            "typeVersion": 2.5,
            "position": [-320, 110],
            "id": "v9-wf05-schema",
            "name": "PG: Garantir Schema Observabilidade",
            "credentials": PG_CRED,
            "alwaysOutputData": True,
        },
        {
            "parameters": {"operation": "executeQuery", "query": CONSOLIDATE_SQL_EXPR, "options": {}},
            "type": "n8n-nodes-base.postgres",
            "typeVersion": 2.5,
            "position": [-60, 110],
            "id": "v9-wf05-consolidar",
            "name": "PG: Consolidar Métricas",
            "credentials": PG_CRED,
            "alwaysOutputData": True,
        },
        {
            "parameters": {
                "conditions": {
                    "options": {"caseSensitive": True, "leftValue": "", "typeValidation": "strict", "version": 2},
                    "conditions": [{"leftValue": "={{ $json.gerar_alerta === true }}", "operator": {"type": "boolean", "operation": "true"}, "id": "if1"}],
                    "combinator": "and",
                },
                "options": {},
            },
            "type": "n8n-nodes-base.if",
            "typeVersion": 2.2,
            "position": [200, 110],
            "id": "v9-wf05-alerta-if",
            "name": "Alerta necessário?",
        },
        {
            "parameters": {
                "fromEmail": "n8n@campus.local",
                "toEmail": "={{ $env.METRICAS_ALERTA_EMAIL || $env.INFRA_EMAIL || 'infraestrutura@campus.local' }}",
                "subject": "={{ (()=>{ const d=new Date($json.data_ref); const dia=Number.isNaN(d.getTime())?String($json.data_ref).slice(0,10):d.toISOString().slice(0,10); return '[V9][Métricas] Alerta de indicadores - '+dia; })() }}",
                "emailFormat": "text",
                "text": "={{ (()=>{ const d=new Date($json.data_ref); const dia=Number.isNaN(d.getTime())?String($json.data_ref).slice(0,10):d.toISOString().slice(0,10); return 'Resumo WF05 '+dia+'\\n\\nErro IA: '+String($json.taxa_erro_ia)+'% (limite '+String($json.limite_erro_ia_percent)+'%)\\nTriagem manual: '+String($json.taxa_triagem_manual)+'% (limite '+String($json.limite_triagem_manual_percent)+'%)\\nChamados travados 24h: '+String($json.chamados_travados_24h)+' (limite '+String($json.limite_chamados_travados)+')\\n\\nTotal processado: '+String($json.total_chamados_processados)+'\\nAutomação efetiva: '+String($json.taxa_automacao_efetiva)+'%'; })() }}",
                "options": {"appendAttribution": False},
            },
            "type": "n8n-nodes-base.emailSend",
            "typeVersion": 2.1,
            "position": [460, 0],
            "id": "v9-wf05-email-alerta",
            "name": "Email: Alerta Métricas",
            "credentials": SMTP_CRED,
            "onError": "continueRegularOutput",
        },
        {
            "parameters": {
                "jsCode": "console.log('[WF05][LOG] Fim metricas alerta=' + String($json.gerar_alerta)); return [{json:{ok:true,resumo_visual:'WF05 consolidou metricas da V9.', data_ref:$json.data_ref, gerar_alerta:$json.gerar_alerta}}];"
            },
            "type": "n8n-nodes-base.code",
            "typeVersion": 2,
            "position": [720, 110],
            "id": "v9-wf05-fim",
            "name": "LOG: Fim",
            "alwaysOutputData": True,
        },
    ],
    "pinData": {},
    "connections": {
        "T1. Manual": {"main": [[{"node": "LOG: Início", "type": "main", "index": 0}]]},
        "T2. Schedule 23h": {"main": [[{"node": "LOG: Início", "type": "main", "index": 0}]]},
        "LOG: Início": {"main": [[{"node": "PG: Garantir Schema Observabilidade", "type": "main", "index": 0}]]},
        "PG: Garantir Schema Observabilidade": {"main": [[{"node": "PG: Consolidar Métricas", "type": "main", "index": 0}]]},
        "PG: Consolidar Métricas": {"main": [[{"node": "Alerta necessário?", "type": "main", "index": 0}]]},
        "Alerta necessário?": {"main": [[{"node": "Email: Alerta Métricas", "type": "main", "index": 0}], [{"node": "LOG: Fim", "type": "main", "index": 0}]]},
        "Email: Alerta Métricas": {"main": [[{"node": "LOG: Fim", "type": "main", "index": 0}]]},
    },
    "active": True,
    "settings": {"executionOrder": "v1", "timezone": "America/Sao_Paulo", "saveExecutionProgress": True, "saveManualExecutions": True},
    "versionId": "v9-wf05-metricas",
    "meta": {},
    "id": "ZpQ0H9uV9Metric05",
    "tags": [],
}


def _ensure_node(node: dict) -> None:
    if not any(existing.get("name") == node.get("name") for existing in WORKFLOW["nodes"]):
        WORKFLOW["nodes"].append(node)


def _connect(source: str, target: str, output_index: int = 0) -> None:
    outputs = WORKFLOW["connections"].setdefault(source, {"main": [[]]})["main"]
    while len(outputs) <= output_index:
        outputs.append([])
    if not any(conn.get("node") == target for conn in outputs[output_index]):
        outputs[output_index].append({"node": target, "type": "main", "index": 0})


def _apply_section7_updates() -> None:
    _ensure_node(
        {
            "parameters": {"path": "avaliacao-humana-v9", "httpMethod": "POST", "responseMode": "responseNode", "options": {}},
            "type": "n8n-nodes-base.webhook",
            "typeVersion": 2,
            "position": [-800, 440],
            "id": "v9-wf05-webhook-avaliacao",
            "name": "Webhook Avaliação Humana",
            "webhookId": "v9-wf05-avaliacao-humana",
        }
    )
    _ensure_node(
        {
            "parameters": {"jsCode": EXTRACT_HUMAN_REVIEW_JS},
            "type": "n8n-nodes-base.code",
            "typeVersion": 2,
            "position": [-560, 440],
            "id": "v9-wf05-extrair-avaliacao",
            "name": "Extrair Avaliação Humana",
            "alwaysOutputData": True,
        }
    )
    _ensure_node(
        {
            "parameters": {"operation": "executeQuery", "query": REGISTER_HUMAN_REVIEW_SQL_EXPR, "options": {}},
            "type": "n8n-nodes-base.postgres",
            "typeVersion": 2.5,
            "position": [-320, 440],
            "id": "v9-wf05-registrar-avaliacao",
            "name": "PG: Registrar Avaliação Humana",
            "credentials": PG_CRED,
            "alwaysOutputData": True,
        }
    )
    _ensure_node(
        {
            "parameters": {
                "respondWith": "text",
                "responseBody": "={{ $json.mensagem || 'Avaliacao registrada.' }}",
                "options": {
                    "responseCode": "={{ Number($json.http_status || 200) }}",
                    "responseHeaders": {"entries": [{"name": "Content-Type", "value": "text/plain; charset=utf-8"}]},
                },
            },
            "type": "n8n-nodes-base.respondToWebhook",
            "typeVersion": 1.5,
            "position": [-60, 440],
            "id": "v9-wf05-resp-avaliacao",
            "name": "Resp: Avaliação Humana",
        }
    )
    _ensure_node(
        {
            "parameters": {"operation": "executeQuery", "query": HUMAN_REVIEW_SAMPLE_SQL_EXPR, "options": {}},
            "type": "n8n-nodes-base.postgres",
            "typeVersion": 2.5,
            "position": [200, 320],
            "id": "v9-wf05-selecionar-avaliacoes",
            "name": "PG: Selecionar Avaliações Humanas",
            "credentials": PG_CRED,
            "alwaysOutputData": True,
        }
    )
    _ensure_node(
        {
            "parameters": {"jsCode": REQUEST_HUMAN_REVIEW_JS},
            "type": "n8n-nodes-base.code",
            "typeVersion": 2,
            "position": [460, 320],
            "id": "v9-wf05-solicitar-avaliacoes",
            "name": "GLPI: Solicitar Avaliações Humanas",
            "alwaysOutputData": True,
            "onError": "continueRegularOutput",
        }
    )
    _connect("PG: Consolidar Métricas", "PG: Selecionar Avaliações Humanas")
    _connect("PG: Selecionar Avaliações Humanas", "GLPI: Solicitar Avaliações Humanas")
    _connect("Webhook Avaliação Humana", "Extrair Avaliação Humana")
    _connect("Extrair Avaliação Humana", "PG: Registrar Avaliação Humana")
    _connect("PG: Registrar Avaliação Humana", "Resp: Avaliação Humana")


_apply_section7_updates()


def _apply_post_confirmation_updates() -> None:
    preview_js = r"""
const q=$json.query || {};
const esc=value=>String(value ?? '').replace(/[&<>\"']/g,ch=>({
  '&':'&amp;','<':'&lt;','>':'&gt;','\"':'&quot;',"'":'&#39;'
}[ch]));
const token=String(q.token || '').trim();
const resultado=String(q.resultado || '').toLowerCase().trim();
const classe=String(q.classe_correta || '').toUpperCase().trim();
const valido=/^[a-f0-9]{32,128}$/i.test(token) && ['correta','incorreta'].includes(resultado);
const campos={token,resultado};
if (classe) campos.classe_correta=classe;
const hidden=Object.entries(campos).map(([key,value])=>
  '<input type="hidden" name="'+esc(key)+'" value="'+esc(value)+'">'
).join('');
const resumo=resultado==='correta' ? 'Confirmar a decisão da automação' : 'Registrar correção da decisão';
const html=valido
  ? '<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Confirmar avaliação</title></head><body><main><h1>Confirmar avaliação humana</h1><p>'+esc(resumo)+(classe ? ': '+esc(classe) : '')+'.</p><p>Esta página não registra a avaliação até você pressionar o botão.</p><form method="post" action="/webhook/avaliacao-humana-v9">'+hidden+'<button type="submit">Confirmar avaliação</button></form></main></body></html>'
  : '<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><title>Link inválido</title></head><body><h1>Link inválido ou incompleto</h1><p>Revise o chamado diretamente no GLPI.</p></body></html>';
return [{json:{http_status:valido?200:400,response_html:html}}];
"""
    _ensure_node(
        {
            "parameters": {
                "path": "avaliacao-humana-confirmacao-v9",
                "httpMethod": "GET",
                "responseMode": "responseNode",
                "options": {},
            },
            "type": "n8n-nodes-base.webhook",
            "typeVersion": 2,
            "position": [-800, 620],
            "id": "v9-wf05-webhook-confirmacao",
            "name": "Webhook Confirmação Avaliação",
            "webhookId": "v9-wf05-confirmacao-avaliacao",
        }
    )
    _ensure_node(
        {
            "parameters": {"jsCode": preview_js},
            "type": "n8n-nodes-base.code",
            "typeVersion": 2,
            "position": [-560, 620],
            "id": "v9-wf05-render-confirmacao",
            "name": "Renderizar Confirmação Avaliação",
            "alwaysOutputData": True,
        }
    )
    _ensure_node(
        {
            "parameters": {
                "respondWith": "text",
                "responseBody": "={{ $json.response_html }}",
                "options": {
                    "responseCode": "={{ Number($json.http_status || 200) }}",
                    "responseHeaders": {
                        "entries": [
                            {"name": "Content-Type", "value": "text/html; charset=utf-8"},
                            {"name": "Cache-Control", "value": "no-store"},
                            {"name": "X-Content-Type-Options", "value": "nosniff"},
                        ]
                    },
                },
            },
            "type": "n8n-nodes-base.respondToWebhook",
            "typeVersion": 1.5,
            "position": [-320, 620],
            "id": "v9-wf05-resp-confirmacao",
            "name": "Resp: Confirmação Avaliação",
        }
    )
    _connect("Webhook Confirmação Avaliação", "Renderizar Confirmação Avaliação")
    _connect("Renderizar Confirmação Avaliação", "Resp: Confirmação Avaliação")


_apply_post_confirmation_updates()


def _apply_experiment_updates() -> None:
    schema_path = DIR.parents[2] / "database" / "init_v9.sql"
    for node in WORKFLOW["nodes"]:
        if node.get("name") == "PG: Garantir Schema Observabilidade":
            node["parameters"]["query"] = (
                schema_path.read_text(encoding="utf-8")
                + "\nSELECT 'schema_observabilidade_ok' AS result;"
            )
            break

    # A amostragem científica é estratificada pelo conferir_gabarito.py.
    # O WF05 não deve criar uma amostra aleatória concorrente durante o benchmark.
    obsolete = {
        "PG: Selecionar Avaliações Humanas",
        "GLPI: Solicitar Avaliações Humanas",
    }
    WORKFLOW["nodes"] = [
        node for node in WORKFLOW["nodes"] if node.get("name") not in obsolete
    ]
    for source in obsolete:
        WORKFLOW["connections"].pop(source, None)
    outputs = WORKFLOW["connections"].get("PG: Consolidar Métricas", {}).get("main", [])
    for branch in outputs:
        branch[:] = [
            edge
            for edge in branch
            if edge.get("node") not in obsolete
        ]


_apply_experiment_updates()


def main() -> None:
    sanitize_workflow_secrets(WORKFLOW)
    rendered = json.dumps(WORKFLOW, ensure_ascii=False, indent=2) + "\n"
    rendered_sha = hashlib.sha256(rendered.encode("utf-8")).hexdigest()
    if rendered_sha != SNAPSHOT_SHA256:
        raise RuntimeError(
            "WF05 gerado diverge do snapshot aprovado. "
            f"Atualize SNAPSHOT_SHA256 apos uma alteracao intencional: {rendered_sha}"
        )
    for output in OUTPUT_FILES:
        path = DIR / output
        path.write_text(rendered, encoding="utf-8", newline="\n")
        print(f"Salvo: {path}")


if __name__ == "__main__":
    main()
