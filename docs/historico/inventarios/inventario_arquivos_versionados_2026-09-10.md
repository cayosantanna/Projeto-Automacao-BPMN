# Inventário arquivo por arquivo — 2026-09-10

> Inventário mecânico dos arquivos rastreados e não ignorados no momento
> da geração. SHA-256 comprova identidade; não comprova correção nem
> validade científica. A classificação de prioridade orienta, mas não
> substitui, a revisão semântica baseada em risco.

- arquivos enumerados: **1000**;
- bytes enumerados: **215,044,457**;
- rastreados no índice: **975**;
- não rastreados e não ignorados: **25**;
- inventário detalhado: `inventario_arquivos_versionados_2026-09-10.csv`.

| Papel mecânico | Arquivos | Bytes |
|---|---:|---:|
| `artefato_ou_evidencia` | 76 | 8,022,331 |
| `codigo_configuracao` | 105 | 2,192,423 |
| `dataset` | 21 | 12,329,438 |
| `documentacao_canonica` | 16 | 146,224 |
| `documentacao_historica_ou_auxiliar` | 72 | 449,017 |
| `historico_workflows` | 16 | 688,726 |
| `outro` | 17 | 219,038 |
| `resultado_corrente` | 31 | 16,333,245 |
| `resultado_historico` | 476 | 136,101,185 |
| `resultado_invalidado` | 113 | 37,002,523 |
| `teste` | 34 | 448,218 |
| `workflow_v9` | 23 | 1,112,089 |

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
