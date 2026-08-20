# Resposta ao professor: seleção científica do modelo local

Data do estado auditado: 17 de agosto de 2026  
Status: seleção interna concluída e validada; conclusão confirmatória ainda não disponível

## Resposta curta

O Granite 97M não foi escolhido porque seria “o melhor embedding existente”.
Ele foi escolhido inicialmente como candidato de engenharia porque atende ao
português, produz vetores de 384 dimensões, possui aproximadamente 97 milhões de
parâmetros e cabe no computador-alvo. Essa justificativa é suficiente para um
protótipo, mas não para declarar superioridade científica.

A justificativa científica foi então transformada em uma seleção comparativa
pré-especificada. Foram comparados Granite 97M, multilingual-e5-small e
paraphrase-multilingual-MiniLM-L12-v2, TF-IDF isolado, embedding isolado,
híbrido textual, metadados isolados e híbrido + metadados. Cada representação é
avaliada com regressão logística, árvore de decisão, SVM linear, MLP pequena e
XGBoost. A matriz de 90 configurações terminou e foi recalculada por um
validador independente. O híbrido Granite + TF-IDF ficou em primeiro lugar
provisório nas duas tarefas, mas os intervalos permaneceram `UNDERPOWERED`.
Portanto, é correto dizer que ele foi o melhor candidato de desenvolvimento
segundo o protocolo; ainda não é correto dizer que venceu no uso institucional.

## 1. Qual pesquisa fundamenta o uso de embedding semântico?

O problema do projeto não é apenas encontrar palavras iguais. Dois usuários
podem descrever o mesmo defeito como “ar não gela” e “climatizador só ventila”,
enquanto textos com vocabulário parecido podem representar ativos, locais ou
eventos distintos. TF-IDF é adequado para termos explícitos, abreviações,
fragmentos de palavras e erros ortográficos, mas não modela sozinho toda essa
equivalência semântica.

Sentence-BERT mostrou uma forma eficiente de projetar sentenças em vetores
semanticamente comparáveis por similaridade, tornando viável a recuperação de
paráfrases sem comparar cada par com um modelo generativo
([Reimers e Gurevych, 2019](https://aclanthology.org/D19-1410/)). Essa é a base
teórica para testar embeddings no projeto, não uma prova de que qualquer
embedding específico resolverá a deduplicação.

O MTEB avaliou 33 modelos em oito tipos de tarefa, 58 conjuntos e 112 idiomas e
concluiu que nenhum método dominava todos os tipos de tarefa. Isso sustenta uma
decisão central do protocolo: ranking genérico ou model card serve para formar
a lista de candidatos, mas a escolha precisa ser refeita no domínio de chamados
de manutenção patrimonial universitária
([Muennighoff et al., 2023](https://aclanthology.org/2023.eacl-main.148/)).

Por isso, a hipótese testada é de complementaridade:

- TF-IDF preserva ativo, sintoma, sala, bloco, categoria, abreviação e ruído
  ortográfico;
- embedding acrescenta proximidade entre paráfrases;
- metadados estruturados preservam evidências que não devem ser diluídas pela
  semântica;
- regras determinísticas e abstenção impedem o modelo de transformar falta de
  informação em certeza automática.

Se o híbrido não superar consistentemente a alternativa simples, o custo do
embedding não ficará justificado.

## 2. Por que esses três embeddings foram incluídos?

Os três candidatos são multilíngues, locais, abertos, compatíveis com CPU e
produzem 384 dimensões, evitando que tamanho da saída seja uma vantagem
artificial na comparação.

| Modelo | Papel na comparação | Evidência externa usada apenas para inclusão |
|---|---|---|
| Granite Embedding 97M Multilingual R2 | candidato compacto originalmente adotado | o model card informa aproximadamente 97 M de parâmetros, 12 camadas e saída de 384 dimensões ([IBM](https://huggingface.co/ibm-granite/granite-embedding-97m-multilingual-r2)) |
| multilingual-e5-small | controle forte treinado com aprendizagem contrastiva multilíngue | o relatório descreve pré-treinamento em um bilhão de pares multilíngues e modelos de diferentes tamanhos para equilibrar qualidade e eficiência ([Wang et al., 2024](https://arxiv.org/abs/2402.05672)) |
| paraphrase-multilingual-MiniLM-L12-v2 | baseline maduro e difundido de similaridade | o model card informa suporte a 50 idiomas e espaço denso de 384 dimensões ([Sentence Transformers](https://huggingface.co/sentence-transformers/paraphrase-multilingual-MiniLM-L12-v2)) |

Revisões e hashes completos das três árvores locais estão congelados no
protocolo. Assim, uma atualização posterior no repositório do modelo não muda a
rodada silenciosamente.

## 3. Por que não usar apenas um embedding ou apenas uma LLM?

Embedding não “raciocina” nem decide sozinho. Ele transforma texto em atributos
densos. A decisão é feita por um classificador supervisionado calibrado, com
limiares de segurança e região de abstenção. Esse desenho oferece:

- inferência local sem cota, 429 ou indisponibilidade de provedor;
- saída determinística e reproduzível;
- separação entre representação, decisão e regra operacional;
- medição de risco e cobertura;
- possibilidade de explicar quais famílias de atributos influenciaram o score;
- confirmação humana mantida para duplicidades positivas e casos incertos.

Uma LLM remota continua possível como fallback operacional controlado, mas não
pode substituir silenciosamente o modelo principal em um benchmark, pois isso
misturaria tratamentos experimentais. Granite 350M permanece apenas como
extrator estruturado experimental; não é o classificador comparado nesta
seleção.

## 4. Por que comparar os cinco classificadores?

- Regressão logística é o baseline linear de baixa variância, rápido e
  interpretável para matrizes textuais esparsas.
- Árvore de decisão testa regras e interações por limiares; a família CART foi
  sistematizada por Breiman, Friedman, Olshen e Stone
  ([CART, 1984](https://books.google.com/books/about/Classification_and_Regression_Trees.html?id=8k1DvQEACAAJ)).
- SVM linear testa uma fronteira de máxima margem em espaço de alta dimensão,
  seguindo a formulação de Cortes e Vapnik
  ([1995](https://doi.org/10.1007/BF00994018)).
- MLP pequena testa interações não lineares. Redes multicamadas têm grande
  capacidade de aproximação, mas essa capacidade não garante generalização em
  amostra pequena
  ([Hornik, Stinchcombe e White, 1989](https://doi.org/10.1016/0893-6080(89)90020-8)).
- XGBoost testa boosting de árvores com algoritmo consciente de esparsidade
  ([Chen e Guestrin, 2016](https://doi.org/10.1145/2939672.2939785)).

Esses algoritmos foram incluídos como hipóteses concorrentes. Nenhum recebeu a
posição de vencedor antecipadamente.

## 5. Como a seleção está sendo executada?

O corpus congelado de desenvolvimento contém 1.360 registros sintéticos. Após
as regras de elegibilidade, há 508 exemplos de classificação em 105 núcleos
independentes e 600 pares de deduplicação em 120 episódios independentes. O hash
SHA-256 do corpus é
`0de50381c0dfaefeb1a940cd697f9c9a8e87b5efee9252a1f4ca43c9d904f204`.

As variações de um mesmo texto-base não são tratadas como observações
independentes. Classificação é agrupada por `narrative_core_sha256` e
deduplicação por `episode_id`. São usadas cinco dobras externas agrupadas,
busca interna de hiperparâmetros também agrupada e uma partição independente de
calibração. O uso de validação aninhada reduz o otimismo produzido quando os
mesmos dados servem simultaneamente para escolher e avaliar o modelo
([Varma e Simon, 2006](https://pubmed.ncbi.nlm.nih.gov/16504092/)).

As ablações foram corrigidas para serem literais:

- TF-IDF isolado não recebe embedding nem metadados;
- embedding isolado não recebe TF-IDF nem metadados;
- híbrido textual recebe TF-IDF + embedding, sem metadados;
- metadados isolados recebem apenas sete sinais estruturados;
- híbrido + metadados reproduz explicitamente o candidato operacional.

Classificação possui 35 combinações; deduplicação, 55; total, 90. A rodada
completa produziu 50.780 predições fora da dobra e 450 resultados de dobra. O
validador independente recalculou métricas, intervalos, ranking e comparações a
partir das predições e marcou o conjunto como `VALID`. Em 17/08/2026, a suíte de
avaliação possuía 222 testes e 43 subtestes aprovados.

## 6. Quais métricas escolhem o modelo?

Não existe uma média arbitrária que esconda um erro grave. A regra é
hierárquica e foi congelada antes da execução.

Na classificação, o pior evento é enviar automaticamente qualquer classe
não-OBRA como OBRA. Depois dos gates de segurança, são considerados macro-F1,
recall de OBRA, cobertura automática, log-loss e tempo médio de ajuste.
`TRIAGEM_MANUAL` é uma quarta classe semântica e nunca conta como automação.

Na deduplicação, falso negativo automático recebe custo 5 e falso positivo,
custo 1. São avaliados FN, FP, valor preditivo negativo, precisão, custo 5:1,
cobertura de decisão e automação integral. Uma previsão positiva ainda passa
pela confirmação humana já existente; somente a negativa pode encerrar a etapa
sem validação.

Os resultados são classificados como:

- `PASS`: ponto estimado e limites de confiança satisfazem os gates;
- `UNDERPOWERED`: o ponto satisfaz, mas a amostra não sustenta o limite de
  segurança;
- `FAIL`: o próprio ponto viola um gate.

Com zero eventos, são necessários ao menos 149 grupos independentes para que o
limite unilateral de 95% fique abaixo de 2%. O corpus atual não atinge esse
tamanho em todos os estratos. Logo, é provável que a rodada produza um candidato
provisório, não um “modelo cientificamente validado”. Isso é falta de potência,
não fracasso de software.

## 7. XAI

SHAP atribui contribuições às características de uma predição e fornece uma
base unificada para explicações aditivas
([Lundberg e Lee, 2017](https://papers.nips.cc/paper/2017/hash/8a20a8621978632d76c43dfd28b67767-Abstract.html)).
O protocolo usa `LinearExplainer` para regressão logística e SVM e
`TreeExplainer` para árvore e XGBoost. Para MLP, usa importância por permutação
agrupada por família, identificada explicitamente como fallback e não como
SHAP. As dimensões individuais do embedding não recebem nomes linguísticos
inventados; são agregadas como família. Explicação não implica causalidade.

## 8. O treinamento já terminou?

Há duas respostas diferentes:

1. O candidato operacional local v1.8 já existe e funciona; ele não está sendo
   apresentado como vencedor científico.
2. A seleção comparativa v1.3 terminou em 17 de agosto de 2026. O diretório da
   rodada é `avaliacao/resultados/selecao-supervisionada-v1.3-20260812`; contém
   matriz completa, XAI, latência e recomputação por validador independente no
   mesmo corpus de desenvolvimento.

O melhor candidato provisório de classificação foi
`classification__hybrid__granite97m__linear_svm`, com macro-F1 0,8006, recall
de OBRA 0,9323, zero eventos não-OBRA encaminhados automaticamente como OBRA e
cobertura automática de 58,07%. O melhor candidato provisório de deduplicação
foi `deduplication__hybrid__granite97m__logistic_regression`, com zero FP e FN
automáticos nos 600 pares e automação integral de 50%. Esses valores são OOF no
desenvolvimento agrupado; os limites unilaterais de risco foram 5,93% e 4,87%,
respectivamente, acima do gate de 2%, portanto ambos são `UNDERPOWERED`.

A materialização experimental v1.9 não substituiu a v1.8: ela aumentou
cobertura, porém apresentou uma falha em 1.240 itens e regressão de latência. A
política automática rejeitou sua promoção, e o serviço operacional foi
restaurado para a v1.8.

## 9. Posso garantir que o n8n está 100% correto?

Não. “100% correto” exigiria provar comportamento para todas as entradas e
falhas possíveis, algo que os testes não fazem. A afirmação defensável hoje é:

- os seis workflows V9 têm 913 verificações estáticas aprovadas e zero falhas;
- os JSONs canônicos coincidem estruturalmente com seus builders;
- os seis workflows implantados estavam ativos e semanticamente alinhados com
  os JSONs na auditoria de deploy;
- nove testes atuais cobrem contratos do WF04/WF06, inclusive
  `nao_duplicado`, token inválido/expirado, replay, concorrência e reserva de
  fila;
- o preflight não mutante real passou para health, autenticação do WF06 e
  preview do WF04;
- o E2E sintético `VALIDACAO-POSTS-E2E-20260818T004922Z` comprovou o ramo
  positivo WF04/WF05, incluindo GET sem mutação, token expirado/inválido,
  corrida com dois POSTs e uma única transição, replay e cleanup;
- o E2E sintético `VALIDACAO-POSTS-E2E-20260818T004902Z` comprovou o ramo
  `nao_duplicado`, incluindo as mesmas barreiras, `REJEITOU_DUP`, limpeza dos
  campos e handoff `PENDENTE_FILA_IA/CLASSIFICACAO` sem resíduo após o cleanup;
- ainda falta um E2E mutante integral da revisão corrente, em ambiente isolado,
  cobrindo a drenagem WF06→WF03 até o estado terminal e uma calibração válida
  do WF06 sem interferência concorrente.

Portanto, a V9 possui alta integridade estática e bons contratos automatizados,
mas ainda não deve ser descrita como infalível ou integralmente validada em
runtime.

## 10. As outras oito versões estão guardadas?

Sim, agora estão preservadas em um pacote público sanitizado em `n8n/history`:
V1–V7 possuem um workflow canônico cada e a V8 possui três, totalizando dez
artefatos. A V6 foi recuperada de um export agregado e a V7 usa o snapshot mais
recente auditado, com 66 nós. O manifesto guarda hashes das fontes, objetos
selecionados e cópias públicas.

Os exports brutos não devem ser publicados, pois contêm credenciais, tokens ou
estado de execução. O gerador remove esses dados, força `active=false` e produz
o histórico reprodutível. Reconstrução determinística, hashes, ausência de
segredos/runtime/binários e 8/8 testes próprios passaram.

## 11. O que foi concluído e o que falta?

A seleção concluiu que Granite híbrido + SVM linear, para classificação, e
Granite híbrido + regressão logística, para deduplicação, são os melhores
candidatos provisórios **dentro do corpus sintético de desenvolvimento**. Isso
não é prova de eficácia institucional nem de superioridade universal. A
validação final ainda exige:

1. congelar o candidato sem novo ajuste;
2. abrir um holdout independente que não participou da seleção;
3. usar rótulos institucionais revisados segundo protocolo humano definido;
4. comparar de forma pareada com Gemini, sem fallback e respeitando cotas;
   DeepSeek só poderá ser incluído após executor próprio testado, pré-registro,
   autorização explícita de custo e amostra completa;
5. reportar intervalos, abstenções, cobertura, erros críticos, latência e custo;
6. repetir o E2E da revisão exata dos workflows que será publicada.

Até essas etapas, a formulação cientificamente correta é “candidato selecionado
em desenvolvimento”, não “IA treinada e validada”.
