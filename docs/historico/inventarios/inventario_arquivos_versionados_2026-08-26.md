# Inventário arquivo por arquivo — 26/08/2026

> Inventário mecânico dos arquivos rastreados e não ignorados no momento
> da geração. SHA-256 comprova identidade; não comprova correção nem
> validade científica. A classificação de prioridade orienta, mas não
> substitui, a revisão semântica baseada em risco.

- arquivos enumerados: **956**;
- bytes enumerados: **214,010,348**;
- rastreados no índice: **820**;
- não rastreados e não ignorados: **136**;
- inventário detalhado: `inventario_arquivos_versionados_2026-08-26.csv`.

| Papel mecânico | Arquivos | Bytes |
|---|---:|---:|
| `artefato_ou_evidencia` | 46 | 5,945,384 |
| `codigo_configuracao` | 71 | 1,865,359 |
| `dataset` | 21 | 12,329,438 |
| `documentacao_canonica` | 9 | 85,506 |
| `documentacao_historica_ou_auxiliar` | 66 | 410,511 |
| `historico_workflows` | 16 | 688,726 |
| `nao_rastreado_publicavel` | 1 | 99 |
| `outro` | 12 | 170,134 |
| `resultado_corrente` | 123 | 18,536,527 |
| `resultado_historico` | 426 | 135,374,037 |
| `resultado_invalidado` | 113 | 37,002,523 |
| `teste` | 29 | 390,326 |
| `workflow_v9` | 23 | 1,211,778 |

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
