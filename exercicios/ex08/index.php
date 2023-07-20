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
        //operações
        // Formatação de moeda: numfmt_format_currency($padrao, $real, "BRL")
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario = $_POST["salario"]; 
        // salário mínimo.
        $salario_min = 1320; 
        $minimo = 1000;
        $ganha = $salario / $salario_min;
        // Parte fracionada
        $inteiro = intval($ganha);
        $dif = $salario % $minimo;       
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Salário </label>
            <input type="number" name="salario" id="v1">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php echo "Considerando o salário mínimo de " .numfmt_format_currency($padrao, $salario_min, "BRL"). "<br>
        Quem recebe " .numfmt_format_currency($padrao, $salario, "BRL"). " Tem $inteiro salário  + " .number_format($dif, 2, ",", "."). "";
        ?>
    </section>


</body>
</html>
