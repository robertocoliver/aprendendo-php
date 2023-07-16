<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1> Analisador de número real </h1>
    </header>
    <main>
        <?php
            $num = $_POST["numero"];
            $int = intval($num);
            $frac = $num - $int;             
            echo "Analisando o número: " . number_format($num, 3, ",", ".") ."<br>
            A parte do número inteiro é: " . number_format($int, 0, ",", ".") . "<br> A parte 
            fracionada é: " . number_format($frac, 3, ",", ".");
        ?>
    <p><a href="javascript:history.go(-1)">Testar novamente</a></p>
</main>
</body>
</html>