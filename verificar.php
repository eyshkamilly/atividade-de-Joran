<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar</title>
</head>
<body>
    
    <?php

    function verificar($nome, $sexo, $idade) {
        if ($sexo == 'feminino' && $idade < 25) {
            echo "Parabéns $nome! Você foi aceita.";
        } else {
            echo "$nome, infelizmente você não se encaixa nos requisitos.";
        }
    }
    
    $nome = "Eyshila";
    $sexo = "feminino";
    $idade = 17;
    verificar($nome, $sexo, $idade);

?>
    
</body>
</html>