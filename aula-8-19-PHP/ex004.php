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

        $a = isset($_GET["ano"])?($_GET["ano"]):1900;
        $i = date("Y") - $a;

        echo "Você nasceu em $a e terá $i anos <br>";

        
        
        if ($i < 16) {
            $v = "você não pode votar";
            $d = "não pode dirigir";
    
        }

        elseif ($i >=16 && $i < 18) {
            $v = "o voto é opcional";
            $d = "não pode dirigir";
        }

       elseif ($i >= 18 && $i < 65) {

            $v = "o voto é obrigatório";
            $d = "já pode dirigir";
       
       } 
        
       else{
        $v = "o voto é opcional";
        $d = "pode dirigir";

       }

       echo "Com essa idade $v e você $d";
   
        
        ?>
        <br>
        <a href="ex004.html">Back</a>
    </div>

</body>
</html>