<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decrescente</title>
</head>
<body>
    
    <?php

function ordenarDecrescente($n1, $n2, $n3) {
    if ($n1 >= $n2 && $n1 >= $n3) {
        if ($n2 >= $n3) {
            echo "$n1, $n2, $n3";
        } else {
            echo "$n1, $n3, $n2";
        }
    } elseif ($n2 >= $n1 && $n2 >= $n3) {
        if ($n1 >= $n3) {
            echo "$n2, $n1, $n3";
        } else {
            echo "$n2, $n3, $n1";
        }
    } else {
        if ($n1 >= $n2) {
            echo "$n3, $n1, $n2";
        } else {
            echo "$n3, $n2, $n1";
        }
    }
}


$n1 = 58;
$n2 = 3;
$n3 = 100;

echo "Números em ordem decrescente: ";
ordenarDecrescente($n1, $n2, $n3);




?>
    
</body>
</html>