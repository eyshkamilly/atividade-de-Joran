<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
</head>
<body>
    
    <?php

    function divisao($numero) {
        if ($numero % 10 == 0) {
            echo "$numero é divisível por 10.";
    }   elseif ($numero % 5 == 0) {
            echo "$numero é divisível por 5.";
    }   elseif ($numero % 2 == 0) {
            echo "$numero é divisível por 2.";
    }   else {
            echo "$numero não é divisível por 10, 5 ou 2.";
    }
}

$numero = 32;
divisao($numero);

?>
    
</body>
</html>