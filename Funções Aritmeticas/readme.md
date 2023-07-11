## Funções Aritméticas do PHP 

Existem várias funções matemáticas embutidas que podem ser usadas para suprir a ausência de certos operadores matemáticos no PHP.

### Outros assuntos que abordam o SSH: 
[Teste os scripts no onlinephp.io](https://onlinephp.io/)

### Função abs() para obter o valor absoluto de um número.

```bash
<?php
 $absoluto = abs(-2000);
 echo $absoluto;
?>
```
### Função base_convert() para passar de uma base para outra.

Essa função recebe 3 parâmetros, veja:
- cstring	O número para converter.
- base	atual ( número inteiro ) 
- nova base	A base para converter ( número inteiro ) 

#### Base Octal 
```bash
  $num = 42;
  $octal_num = base_convert($decimal_num, 10, 8);
  echo $octal_num;  // Output: 52
```
#### Conversão para hexadecimal

```bash
 $hexadecimal_num = base_convert($num, 10, 16);
 echo $hexadecimal_num;  // Output: 2a
```
#### Binário

```bash
 $binary_num = base_convert($num, 10, 2); 
 echo $binary_num;  // Output: 101010
```

## Funções matemáticas para arredondamento de números.

#### ceil() arredonda um número para cima 
```bash
<?php
 $num = 51.2;
 $result = ceil($num);
 echo $result // output 52 
?>
```
#### floor() arredonda um número para baixo
```bash
<?php
 $num = 51.9;
 $result = floor($num);
 echo $result // output 51 
?>
```

## Função matemática para calcular a hypotenusa 
```bash
<?php
 $x = 3;
 $y = 4;
 $result = hypot($x, $y);
 echo $result; // output = 5 
?>
```
## min(), max()  Obter o número min e max
#### Mínimo
```bash
<?php 
 $m = min(2,3,4,5,6,7,8,9,1);
 echo $m; // output 1 
?>
```
#### Máximo
```bash
<?php 
 $m = max(2,3,4,5,6,7,8,9,1);
 echo $m; // output 9 
?>
```

## Função para calcular potência
```bash
<?php
 $m = pow(3,3);
 echo $m; // output 27 
?>
```

## Obtendo o valor de PI pela função e constante respectivamente
#### Função pi()
```bash
<?php
 $pi = pi();
 echo $pi; // output 3.14...
?>
```
#### Constante pi 
```bash
<?php
 $pi = M_PI;
 echo $pi; // output 3.14...
?>
```

## Função sqrt() para obter raiz de um número 
```bash
<?php
 $raiz = sqrt(25) ;
 echo $raiz;
?>
```
