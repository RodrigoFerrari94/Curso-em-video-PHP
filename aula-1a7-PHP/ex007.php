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
        $a = 3;
        $b = $a;
        $b += 5;

        echo "a = $a e b = $b";
//nesse caso o b é independente de a.

   
        
        ?>
<br>
<?php
        $a = 3;
        $b = &$a;
        $b += 5;

        echo "a = $a e b = $b";
// com o & o b e o a estão interligados recebendo os mesmos valores

   
        
        ?>
    </div>

</body>
</html>