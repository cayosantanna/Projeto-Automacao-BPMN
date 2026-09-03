# Índice histórico

Este diretório guarda documentação legada. O arquivo executável e sanitizado
dos workflows não fica aqui: a fonte canônica para V1–V8 é
`n8n/history/`, com dez JSONs inativos, `manifest.json`, hashes, gerador,
validador e testes. A V9 corrente fica em `n8n/workflows/Versão9/`.

O conteúdo de `docs/historico/v8/` descreve a V8 e pode conter instruções
incompatíveis com o ambiente atual. Não use versões históricas para deploy sem
revisão de nós, endpoints, credenciais e migração de dados.

Validação do arquivo público:

```powershell
python n8n/history/build_history.py --check
python n8n/history/validate_history.py --check-sources
python -m pytest -q n8n/history/tests
```
