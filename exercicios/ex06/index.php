<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulários retroalimentado
        $valor1 = $_POST['v1'] ?? 0;
        $valor2 = $_POST['v2'] ?? 0;

    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1 </label>
            <input type="number" name="v1" id="v1" value="<?php echo $valor1 ?>">
            <label for="v2">Valor2 </label>
            <input type="number" name="v2" id="v2" value="<?php echo $valor2 ?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section>
        <h1>Resultado da soma</h1>
        <?php 
            $soma = $valor1 + $valor2;
            echo "A soma entre $valor1 e $valor2 é: $soma";
        ?>
    </section>


</body>
</html>
