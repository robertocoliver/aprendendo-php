## Super Globais do PHP 

###  $_GET 
```bash
  $_GET
```
### Query String 

#### Código usado para explicar a imagem mais abaixo
```bash
  <?php
    echo "Superglobais GET<br>";
    var_dump($_GET);
  ?>!
```

![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/edf414e8-3f38-48ee-a6d8-0c712514be8b)

- $_GET é uma superglobal que é tratada como um array associativo. Em uma solicitação HTTP, por exemplo, quando os dados são enviados para um servidor através de uma URL e contém um valor ( rodrigo ) associado a uma chave ( nome ), o PHP analisa esses parâmetros e os coloca na superglobal $_GET 


### $_POST

```bash
  $_POST
```
![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/95cf4439-c40e-4b10-9c24-7df71514620c)

- $_POST é uma superglobal para lidar dados enviados de um formulário HTML ou de uma solicitação HTTP enviada usando o método POST. Diferentemente do método GET, que coloca os dados na URL como parte da query string, o método POST envia os dados no corpo da solicitação HTTP, tornando-os invisíveis na URL.

###  $_REQUEST 
```bash
  $_REQUEST
```
- $_REQUEST é uma superglobal que contém os dados enviados tanto através do método GET quanto POST. Esses dados são combinados em um único array associativo, permitindo o acesso aos parâmetros de ambos os métodos de envio em um só lugar.


### $_COOKIE
### $_FILES
### $_SESSION
### $_EN
### $_SERVER
### $GLOBALS



## Caracteristicas das Super Globais
- Tratam os valores recebidos como Strings

