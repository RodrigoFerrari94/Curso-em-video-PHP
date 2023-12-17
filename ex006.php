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
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é " . --$atual;
        echo "<br>E o próximo ano é " . (++$atual+1);

   
        
        ?>
    </div>

</body>
</html>