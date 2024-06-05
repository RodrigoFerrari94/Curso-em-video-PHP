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

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A média entre nota $nota1 e nota $nota2 é igual á $m";
        echo "<br>A situação do aluno é ".( ($m<6)?"REPROVADO":"APROVADO");
        
        
        ?>
    </div>

</body>
</html>
