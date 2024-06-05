<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        
        <?php

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1 + $n2) / 2;

        echo "<h2>Valores Recebidos: $n1 e $n2<h2/>";
        echo "A soma de $n1 e $n2 é = ". ($n1+$n2);
        echo "<br>A subtração de $n1 e $n2 é = ". ($n1-$n2);
        echo "<br>A multiplicação de $n1 e $n2 é = ". ($n1*$n2);
        echo "<br>A divisão de $n1 e $n2 é = ". ($n1/$n2);
        echo "<br>O módulo entre $n1 e $n2 é = ". ($n1%$n2);
        echo "<br>A media de $m ";

        
   
        
        ?>
    </div>

</body>
</html>