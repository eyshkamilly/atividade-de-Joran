<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulo</title>
</head>
<body>
    
    <?php

    function classificarTriangulo($lado1, $lado2, $lado3) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Triângulo Equilátero.";
    }   elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "Triângulo Isósceles.";
    }   else {
            echo "Triângulo Escaleno.";
    }
}

$lado1 = 9;
$lado2 = 9;
$lado3 = 7;

echo "Para os lados $lado1, $lado2 e $lado3: ";
classificarTriangulo($lado1, $lado2, $lado3);

?>
    
</body>
</html>









