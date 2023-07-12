<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do servidor</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <header>
        <h1> Trabalhando com números aleatórios </h1>   
    </header>
    <?php
        $min = 0; 
        $max = 100;        
        echo "<p>Gerando um número aleatório entre 0 e 100<br></p>";
        $aleatorio = rand($min, $max);
        echo $aleatorio;
    ?> 
</body>
</html>



