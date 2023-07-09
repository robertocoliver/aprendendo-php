## Introdução a Strings em PHP 

### Double quoted: aspas duplas " "
- variáveis dentro da string são interpretadas.
- Sequências de escape, como \n, \t, e \u são interpretadas.
- Caracteres especiais, como aspas duplas (") ou o símbolo de dólar ($), também são interpretados.
Ao utilizar aspas duplas, as strings se tornam dinâmicas, pois as variáveis e caracteres especiais são interpretados e incorporados. A essa técnica, damos o nome de interpolação.
### Single quoted: aspas simples

### Strings Heredoc
- Características de aspas duplas, usando textos em múltiplas linhas.
- inserir grandes blocos de texto em seu código.

![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/625af62b-b7ab-48f5-9802-7c70779ec98a)


### Strings do tipo Nowdoc
- Não há interpolação ( interpretação ) de variáveis na string.


![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/abc7a780-0610-4d37-be88-6c8df2c2f1e7)



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


## Sequência de scape para Double quoted
- \": Escapa uma aspa dupla dentro de uma string.
- \$: Escapa o caractere de cifrão ($), evitando sua interpretação como uma variável.
- \\: Escapa uma barra invertida ().
- \n: Representa uma nova linha.
- \r: Representa um retorno de carro.
- \t: Representa uma tabulação horizontal.
- \u{}: Codepoint Unicode
