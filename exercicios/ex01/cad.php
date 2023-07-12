<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
        <h1> Resultado Final </h1>
   </header>
   <main>
        <?php
            $numero = $_POST["numero"] ?? "número não informado";
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número informado é $numero<br>Seu antecessor é $antecessor<br>Seu sucessor é $sucessor</p>";
        ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>


