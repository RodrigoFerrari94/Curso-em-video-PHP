<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

  
// Inicialize ou restaure a sessão
session_start();

// Inicialize o array de lembranças
$lembrancas = $_SESSION['lembrancas'] ??  [] ;

// Verifique se há uma solicitação para excluir todas as mensagens
if (isset($_POST['excluir_todas'])) {
    // Limpe o array de lembranças
    $lembrancas = [];

    // Atualize a sessão com o array vazio
    $_SESSION['lembrancas'] = $lembrancas;
}

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtenha o valor do campo de texto
    
    $res = $_POST['txt'] ?? '';

    // Adicione a lembrança ao array apenas se não estiver em branco
    if ($res !== '') {
        $lembrancas[] = $res;
    }
    

    // Atualize a sessão com as novas lembranças
    $_SESSION['lembrancas'] = $lembrancas;

    // Se a mensagem enviada foi em branco, exiba todas as mensagens
    if ($res === '') {
        echo "<h1>Nossas Lembranças</h1>";
       
        //foreach ($lembrancas as $lembranca) {
        foreach ($lembrancas as $lembranca) {           
            echo "<p>$lembranca </p>";
}

if (count($lembrancas)){
    $maior = 0;    
    foreach ($lembrancas as $lembranca) {
        $maior = max($maior, strlen($lembranca)); 
    }
    $lembrancas = array_filter($lembrancas, function ($item) use ($maior) {
        return strlen($item) == $maior;
    });
    echo "Nossas melhores lembranças são: ";
    foreach ($lembrancas as $lembranca) {           
        echo "<p>$lembranca </p>";
    }
   // echo "<pre>".print_r($lembrancas, true)."</pre>";
//    array_filter(array $array, ?callable $callback = null, int $mode = 0): array


   /* foreach ($lembrancas as $lembranca) {
        if (strlen($lembranca) == $maior) {
            echo "<p>$lembranca</p>";
        }  
    }
    */

/*if (count($lembrancas)){
    $maior = 0;
    foreach ($lembrancas as $lembranca) {
        $maior = max($maior, strlen($lembranca));
        
    }/
    echo "Nossas melhores lembranças são: ";
    foreach ($lembrancas as $lembranca) {
        if (strlen($lembranca) == $maior) {
            echo "<p>$lembranca</p>";
        }  
    }
    */
/*
$maior = '';   
foreach ($lembrancas as $lembranca) {
    if( strlen($lembranca) > strlen($maior)){
        $maior = $lembranca;
    }
    }
    if ($maior) {
        echo "Nossas melhores lembranças são: ";
    }

foreach ($lembrancas as $lembranca) {
    if (strlen($lembranca) == strlen($maior)) {
        echo "<p>$lembranca</p>";
}
*/
}
/*
        $maiorLembranca = array_reduce($lembrancas, function ($carry, $item) { 
            if (strlen($item) > strlen($carry)) return $item;
            return $carry;
        }, "");
        echo "Minha melhor lembrança é: $maiorLembranca<br />";*/



        if ($lembrancas==[]) {
            $amo = "";
        }else{
            $amo = "<h2>Amo nossas lembranças!!!</h2>";
        }
        

        echo "$amo"; 


        
        if (!isset($_POST['excluir_todas'])) 

            // Adicione o botão para excluir todas as mensagens
            echo "<form action='lemb.php' method='post'>
                <input type='submit' name='excluir_todas' value='Excluir Todas'>
                </form>";
    }
}



// Verifique se há uma solicitação para remover uma mensagem
if (isset($_GET['remover'])) {
    $indice = $_GET['remover'];

    // Remova a mensagem do array
    unset($lembrancas[$indice]);

    // Atualize a sessão com o array modificado
    $_SESSION['lembrancas'] = $lembrancas;
}






// Exiba o formulário
echo "<form action='lemb.php' method='post'> 
      <p>Conte lembranças sobre a gente: <input type='text' name='txt'></p>
      <input type='submit' value='Enviar'>
      </form>";
    
?>



</body>
</html>