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
            // ?? Operador de coalescência nula (null coalescing operator)
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_POST["sobrenome"] ?? "sem sobrenome";
            echo "<p>Prazer em te conhecer, $nome $sobrenome. Este é o meu site."; 
        ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>
