# Inventário arquivo por arquivo — 2026-09-01

> Inventário mecânico dos arquivos rastreados e não ignorados no momento
> da geração. SHA-256 comprova identidade; não comprova correção nem
> validade científica. A classificação de prioridade orienta, mas não
> substitui, a revisão semântica baseada em risco.

- arquivos enumerados: **900**;
- bytes enumerados: **212,272,538**;
- rastreados no índice: **820**;
- não rastreados e não ignorados: **80**;
- inventário detalhado: `inventario_arquivos_versionados_2026-09-01.csv`.

| Papel mecânico | Arquivos | Bytes |
|---|---:|---:|
| `artefato_ou_evidencia` | 51 | 6,156,500 |
| `codigo_configuracao` | 90 | 2,072,576 |
| `dataset` | 21 | 12,329,438 |
| `documentacao_canonica` | 14 | 127,777 |
| `documentacao_historica_ou_auxiliar` | 66 | 408,234 |
| `historico_workflows` | 16 | 688,726 |
| `outro` | 12 | 170,317 |
| `resultado_corrente` | 31 | 16,331,962 |
| `resultado_historico` | 431 | 135,409,808 |
| `resultado_invalidado` | 113 | 37,002,523 |
| `teste` | 32 | 425,647 |
| `workflow_v9` | 23 | 1,149,030 |

## Interpretação

A auditoria aprofundou código, dados e documentos de maior risco. Arquivos
gerados/binários foram validados por identidade, estrutura, proveniência e
reprodutibilidade quando havia gerador; não é correto alegar leitura manual
linha a linha de cada binário. Itens `REVIEW_RETENTION` são preservados por
rastreabilidade, mas devem entrar em uma política futura de retenção.

Regere após mudanças relevantes:

```powershell
python scripts/gerar_inventario_repositorio.py
```
