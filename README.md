# aprendendo-php
Repositório para meus estudos de PHP 

## Documentação 
- [Documentação PHP br](https://www.php.net/manual/pt_BR/)


## Livros 
- learning php: David Sklar
- Programming php: Kevin totoe
- PHP Quick Scripting Reference: Mikael Olsson


## História do PHP 
- Rasmus Lerdorf é o criador do PHP.
- Ele desenvolveu inicialmente uma ferramenta CGI utilizando a linguagem C, que recebeu o nome de Personal Home Page (PHP), com o objetivo de acompanhar o número de pessoas que acessavam seu currículo online.
- Em 1995, a primeira versão das Personal Home Page Tools (PHP Tools) foi lançada, oferecendo ferramentas para a criação de páginas pessoais. Inicialmente, essas ferramentas utilizavam comandos da linguagem C e Pear.
- Em um determinado momento, Rasmus Lerdorf decidiu renomear as PHP Tools para "Form Interpreter", buscando desenvolver um interpretador de formulários.
- No ano seguinte, em 1996, Rasmus Lerdorf lançou a versão 2.0 da ferramenta e a renomeou novamente como "PHP/FI", mantendo a ideia de um interpretador de formulários e preservando o nome Personal Home Page. Nessa fase, o PHP/FI já possuía recursos para integração com bancos de dados e suporte a cookies. Com o crescimento da ferramenta, Rasmus optou por torná-la de código aberto (Open Source).
- Em 1997, dois importantes colaboradores da Universidade de Israel Institute Of Technology contribuíram significativamente para a reescrita do código e da estrutura do PHP/FI.
- Em 1998, a versão 3.0 do PHP foi lançada. Nesse mesmoano,  ocorreu a mudança do nome de "Personal Home Page" para "hypertext preprocessor". Além disso, dois grandes colaboradores desempenharam papéis significativos na identidade profissional do PHP. Colin Vierbrock desenvolveu o logotipo do PHP, enquanto Vincent Pontier criou o mascote da linguagem.
- Em 1999, Andi Gutmans e Zeev Suraski fundaram a empresa Zend, especializada no desenvolvimento da linguagem PHP. A partir de então, a linguagem PHP passou por várias evoluções, com as versões 4.0, 5.0, 7.0 e 8.0 sendo lançadas ao longo do tempo.

## Versões do PHP 

#### PHP 1.1 ( 1995 )
- Ferramenta Personal Home Page lançada por Rasmus Lerdorf
- CGI: Contava o número de visitas e interpreva formulários.

### PHP 2.0 ( 1997 )
- Renomeado para PHP/FI 2.0
- Colaboração de Zeev Suraski e Andi Gutmans

### PHP 3.0 ( 1998 )
- Primeira versão colaborativa lançada.
- Extension API
- Fundação da empresa Zend

### PHP 4.0 ( 2000 )
- Zend Engine 1.0
- Modularização
- Uso de super globais $_GET, $_POST, $_SESSION

### PHP 5.0 ( 2004 )
-  Zend Engine 2.0
-  POO ( Programação orientada ao objeto ) 
-  PDO (PHP Data Objects)
-  Suporte ao Json
-  PHPdbg ( depurador )

 ###  PHP 7.0 ( 2015 )
 - Zend Engine 3.0
 - Escape de códigos Unicode
 - Operador null coalescing
 - Declaração escalar
 - Classes anônimas
 - Libsodium ( biblioteca de criptografia )
 - Foreign function interface

### PHP 8.0 ( 2020 )
- Just-in-time compilation
- Named arguments
- Expressão match
- Enumerations
- Fibers 

## Soluções que o PHP pode resolver ? 
- Websites
- Servidores

## Necessidades de um servidor 
Sendo um servidor um ambiente para fornecer recursos e hospedagem, é necessário que tenha tecnologias como: 
### Servidor 
- Apache
- Nginx 
- Para as linguagens interpretadas, é necessário ter um interpretador ou ambiente de execução.

## É necessário termos a combinação das tecnologias server-side e client-side, para meus estudos vou utilizar: 

## Server-side
  - Apache/nginx/ISS: Apache
  - Banco de dados: Mysql
  - Interpretador: PHP
## Client-side
  - Navegador: Google/Brave/Mozilla
  - Editor(IDE): Vscode

A tríade Apache, MySQL e o PHP é conhecida como soluções AMP. Como o PHP precisa ser executado em um servidor, existem diferentes soluções dependendo do sistema operacional. 
Para servidores Linux, temos: Solução LAMP (Linux + Apache + MySQL + PHP). 
Para servidores Windows, temos: Solução WAMP (Windows + Apache + MySQL + PHP)

## Instalando XAMPP

Baixando XAMPP para linux nas versões recomendadas do site e dando permissão de execução:
```bash
  https://www.apachefriends.org/pt_br/index.html
```
![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/5a9c3df5-7ffb-4bb4-86a1-7eeac7bfe0c6)

Encontre o diretório onde o arquivo foi salvo e execute:
```bash
  ./xampp-linux-x64-8.2.4-0-installer.run
```
![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/3c793db5-a243-44cd-bcb8-d21cbe843356)

Na seção "Manage Servers" do XAMPP, é possível gerenciar os servidores MySQL, ProFTPD e Apache. Ao digitar "localhost" ou "127.0.0.1" no navegador, é possível verificar se o servidor Apache está em execução.

![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/161ca69b-0f4e-4059-b408-da50a637537c)

## Vantagens do XAMPP 
O XAMPP automatiza o processo de instalação do Apache, MySQL e PHP, configurando-os automaticamente. Além disso, o XAMPP também instala e configura outras ferramentas essenciais, como o phpMyAdmin, para trabalhar em conjunto.

## Configurações do VSCode

Vscode: 
- Salvamento Automático
- Arquivo > Preferências > Configurações > Files: Auto Save, onWindowsChange
- Arquivo > Preferências > Configurações > Editor: Font Size, 20

Permissões: 
Vamos dar permissão ao diretório raiz do servidor web local XAMPP/LAMPP, que é acessível através do servidor web e pode ser executado no navegador.
Permissão de criação e exclusão: 
```bash
  chmod u+w /caminho/opt/lampp/htdocs
```
Extensões: 
- PHP Intelephense: Oferece recursos de autocompletar, sugestões de código, análise estática e navegação inteligente para o PHP. 
- PHP awesome snippets: Agilizar o desenvolvimento, fornecendo blocos de código comumente usados.

## Aprendendo melhor o PHP

Delimitando script PHP:

```bash
  <script language="php">
   $teste = "teste";
   echo "<p>Isso é um teste $teste</p>" 
  </script>
```
![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/729502be-e42d-4e3c-b848-349658f3b257)


Delimitando ASP tag PHP:

```bash
  <%  %>
```
Durante algum tempo, o php tinha a linguagem ASP como concorrente, e por muito tempo, o php incrementou as ASP tag para delimitar código php.

Delimitando short open tag PHP:

```bash
 <?
  echo "Hola Mundo"
 ?>
```

Delimitando Super tag:

```bash
 <?php
  echo "Hola Mundo";
 ?>
```

Delimitando short tag:

```bash
 <?=
  echo "Hola Mundo"
 ?>
```
Pode-se utilizar a short open tag para simplificar a tag quando há apenas um comando dentro da tag. O ';' depois do comando echo também pode ser desconsiderado.

### Funcionamento do Pré-Processamento 
O PHP é uma linguagem interpretada em tempo real, isso significa que o servidor web envia ao interpretador um arquivo PHP, o interpretador por sua vez análisa, executa e gera conteúdo HTML.  O exemplo abaixo, o conteúdo HTML é gerado em tempo real e enviado para o navegador.

```bash
 <?php
  date_default_timezone_set("America/Sao_Paulo");
  echo "Hoje é dia " .date("d/M/Y");
  echo " e a hora atual é " .date("G:i:s T");
 ?> 
```
![screenshot](https://github.com/robertocoliver/aprendendo-php/assets/102238044/d9103806-c32e-4849-8105-bea4b5f40db1)
