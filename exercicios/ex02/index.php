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
        // rand() = 1951 - Linear Congrential Gererator ( Utiliza um algoritimo antigo )
        // mt_rand() = 1997 - Mersenne Twister 
        // A partir do PHP 7.1, rand() utiliza o algoritimo mt_rand()
        // random_int() gera números aleatórios criptograficamente seguros ( muito lento ), usar apenas quando necessário.
        $min = 0; 
        $max = 100;        
        echo "<p>Gerando um número aleatório entre 0 e 100<br></p>";
        $aleatorio = rand($min, $max);
        echo $aleatorio;
    ?> 
</body>
</html>



