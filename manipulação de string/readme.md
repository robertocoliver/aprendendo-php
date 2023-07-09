## Introdução a Strings em PHP 

### Double quoted: aspas duplas " "
- variáveis dentro da string são interpretadas.
- Sequências de escape, como \n, \t, e \u são interpretadas.
- Caracteres especiais, como aspas duplas (") ou o símbolo de dólar ($), também são interpretados.
Ao utilizar aspas duplas, as strings se tornam dinâmicas, pois as variáveis e caracteres especiais são interpretados e incorporados. A essa técnica, damos o nome de interpolação.
### Single quoted: aspas simples

### Heredoc

### Nowdoc



## Exemplos ao utilizar double quoted x single quoted 

Exemplo 1:

'PHP \u{1F418}' = PHP\u{1F418}

"PHP \u{1F418}" = PHP🐘

## Incluir o valor de uma constante em uma string.
Para incluir o valor de uma variável em uma string, basta utilizar da interpolação ( utilizar "" ) para que a variável possa ser interpretada dentro de uma string. E uma constante?
Concatenação de constantes
```bash
  A interpolação em constantes em PHP não existe. Para isso, é preciso substituí-las ou concatená-las.
```
