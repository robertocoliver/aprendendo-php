<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Valor em dolar</h1>
    </header>   
    <main>
        <?php
            $real = $_POST['real'];
            $dolar = $real / 4.83;
            echo "<p>O valor da sua carteira em real é: $real<br> Em dolar é: $dolar</p>";
        ?>
    <p><a href="javascript:history.go(-1)">Converter outro valor</a></p>
</main>
</body>
</html>