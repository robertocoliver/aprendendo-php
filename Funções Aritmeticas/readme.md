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





