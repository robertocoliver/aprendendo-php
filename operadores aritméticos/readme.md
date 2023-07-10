## Operadores Aritméticos do PHP 

-  (+) Adição
-  (-) Subtração
-  (*) Multiplicação
-  (/) Divisão real 
-  (%) Módulo ( retorna o resto da divisão )
-  (.) Concatenação ( não é um operador ) 

No PHP, a adição de dois números, mesmo quando eles são representados como strings, é tratada como uma operação de adição numérica. Isso ocorre porque o PHP faz uma conversão automática. Para o PHP,  a concatenação acontece apenas quando é utilizada o operador "."
```bash
<?php
 $n = "2" + "2";
 var_dump($n);
?>
```
O resultado da operação supracitada é 4. </br>
Diante dessa linha de raciocínio, para o PHP, a adição entre duas strings gera erro.

```bash
<?php
 $n = "teste" + "teste";
 var_dump($n);
?>
```
O tipo de erro gerado é "Fatal error: Uncaught TypeError: Unsupported operand types: string + string"


Nas versões do PHP antigo, era possível acontecer a seguinte situação:
```bash
<?php
 $n = "10 dola" + "12 dola";
 var_dump($n)
?>
```
Os números dentro das aspas eram convertidos e somados.
Resposta: int(22) 
