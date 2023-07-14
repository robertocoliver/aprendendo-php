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
            // numfmt_create("pt_BR", NumberFormatter::CURRENCY);  
            // - numfmt_create é uma função.
            // - A função cria uma instância do NumberFormatter | formatação numérica personalizada
            // - O primeiro argumento em string define a localização  | idioma 
            // - O segundo argumento é o estilo de formatação, NumberFormatter::CURRENCY ( formatação de moeda  )
            //  formatado e a moeda em que o valor deve ser expresso
            
            //  numfmt_format_currency($padrao, $real, "BRL") 
            // Aceita 3 argumentos, o primeiro é a instância NumberFormatter $padrao que define as configurações de localidade e estilo de formatação
            // O segundo argumento é o número a ser formatado 
            // O terceiro argumento é a moeda que o valor deve ser expresso  
            
            $real = $_POST['real'];
            $dolar = $real / 4.83;
            // como eu fiz: echo "<p>O valor da sua carteira em real é: ".$real."<br> Em dolar é: $dolar</p>";
            // Resolução: echo " Seus R\$ " . number_format($real, 2, ",", "."). " equivalem a US\$ " . number_format($dolar,2, ",", ".");       
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "Equivalem a " .numfmt_format_currency($padrao, $dolar, "USD");

        ?>
    <p><a href="javascript:history.go(-1)">Converter outro valor</a></p>
</main>
</body>
</html>

