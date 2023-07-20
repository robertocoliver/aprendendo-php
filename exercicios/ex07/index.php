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
        $dividendo = $_POST['v1'] ?? 0;
        $divisor = $_POST['v2'] ?? 0;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Dividendo </label>
            <input type="number" name="v1" id="v1" value="<?php echo $valor1 ?>">
            <label for="v2">Divisor </label>
            <input type="number" name="v2" id="v2" value="<?php echo $valor2 ?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section>
        <h1>Resultado da divisão</h1>
        <?php 
            $div = $dividendo % $divisor;
            $div2 = $dividendo / $divisor;
            echo "O dividendo é $dividendo o divisor é $divisor<br>
            resta $div e o resultado da operação é $div2";
        ?>
    </section>


</body>
</html>
