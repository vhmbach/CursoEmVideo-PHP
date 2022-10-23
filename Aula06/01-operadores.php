<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./assets/_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPERADORES</title>
</head>
<body>
<div>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$" . number_format($preco, 2);
    $preco += $preco * 10/100;
    echo "</br> O preço do produto com o aumento é R$" . number_format($preco, 2);
    ?>
</div>
</body>
</html>
