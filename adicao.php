<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar</title>
</head>
<body>
    
    <?php

        function somar($n1, $n2) {
            $soma = $n1 + $n2;
    
            if ($soma > 20) {
                $soma += 8;
            } else {
                $soma -= 5;
        }
    
        return $soma;
}

$n1 = 10;
$n2 = 15;
$resultado = somar($n1, $n2);
echo "Resultado: " . $resultado;
?>
    
</body>
</html>