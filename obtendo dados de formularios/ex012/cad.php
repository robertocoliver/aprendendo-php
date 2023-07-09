<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <header>
        <h1> Resultado do processamento </h1>
   </header>
   <main>
        <?php
            $nome = $_GET["nome"];
            $sobrenome = $_POST["sobrenome"];
            echo "<p>Prazer em te conhecer, $nome $sobrenome. Este é o meu site."; 
        ?>
   </main>
</body>
</html>