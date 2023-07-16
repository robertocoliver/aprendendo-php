<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> 
        <h1> Conversor de moedas v2.0 </h1>
    </header>
    <main>
        <?php
            // Resolução: echo " Seus R\$ " . number_format($real, 2, ",", "."). " equivalem a US\$ " . number_format($dolar,2, ",", ".");       

            $real = $_POST["real"];
            $url = "https://economia.awesomeapi.com.br/last/USD"; // A URL não possui cifrão, por isso não há necessidade de aspas simples para o interpretador não procurar por uma variável e fazer o scape. 
            $req = file_get_contents($url);
            $json = json_decode($req, true);
            $string = $json['USDBRL']['bid'];
            $dolar = floatval($string);

            $convert = $real / $dolar;

            echo "Seus R\$ "  . number_format($real,2, ",", ".") . " equivalem a US\$ " . number_format($convert, 2, ",", ".");
        ?>
    <p><a href="javascript:history.go(-1)">Testar novamente</a></p>
</main>
</body>
</html>