<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<style>
        span.cor{
            color: <?php echo "red" ?>;
            font-weight: <?php echo "bolder" ?>;
        }
</style>
<body>
    <div>
        
        <?php
        
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $n1 = intval($n1);
        $n2 = intval($n2);
        $m = ($n1+$n2)/2;

        echo "A média entre <span class='cor'>".number_format($n1,1)."</span> e <span class='cor'>".number_format($n2,1)."</span> é igual a <span class='cor'>". number_format($m,1)."</span>.";


        if ($m >=8) {
            $s = "APROVADO";
        }
        elseif($m >= 6 && $m < 8) {
            $s = "RECUPERAÇÃO";
        }
        else {
            $s = "REPROVADO";
        }

        echo "<br> Situação do aluno: <span class='cor'>$s</span>"

        
        ?>
        <br>
        <a href="ex005.html">VOLTAR</a>
    </div>

</body>
</html>