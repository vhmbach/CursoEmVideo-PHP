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
        $ano = $_GET["a"];
        echo "O ano atual é: $ano";
        $ano = --$ano;
        echo "</br> O ano anterior foi: $ano";
        ?>
    </div>
</body>
</html>
