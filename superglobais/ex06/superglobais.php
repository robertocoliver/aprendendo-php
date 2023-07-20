<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
        <?php
            setcookie("usertoken", "TERÇA", time() + 3600);
            echo "<h1>Superglobais GET</h1>:";
            var_dump($_GET);
            echo "<h1>Superglobais POST</h1>";
            var_dump($_POST);
            echo "<h1>Superglobais REQUEST<h1>";
            var_dump($_REQUEST);
            echo "<h1>Superglobais COOKIE</h1>";
            var_dump($_COOKIE);
        ?>
        </pre>
    </main>    
</body>
</html>