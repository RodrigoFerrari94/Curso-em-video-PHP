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
        $tipo = $_GET["op"];

        echo "Os valores foram $n1 e $n2";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
        echo "<br> O resultado será $r"
        
        ?>
    <br>

        <?php
        $a = 3;
        $b = "3";
        $r = ($a == $b)? "sim" : "não";

        echo "As variáveis A e B são iguais? $r";
      
      
        ?>
<br>
<?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)? "sim" : "não";

        echo "As variáveis A e B são identicas? $r";
      
      
        ?>



    </div>

</body>
</html>