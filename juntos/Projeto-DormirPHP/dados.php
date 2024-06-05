<?php
$nome = !empty($_POST["nome"])?$_POST["nome"]:"Desconhecido";



if ($_POST["res1"]=="sim" && $_POST["res2"]=="sim") {
    echo "Olá $nome, impossível, se dormiu bastante não pode estar com sono.";
}elseif ($_POST["res1"]=="sim" && $_POST["res2"]=="nao") {
  echo  "Olá $nome, claro dormiu bastante, por isso não está com sono.";
}elseif ($_POST["res1"]=="nao" && $_POST["res2"]=="sim") {
    echo  "Olá $nome, claro dormiu pouco, por isso está com sono.";
  }elseif ($_POST["res1"]=="nao" && $_POST["res2"]=="nao") {
    echo  "Olá $nome, impossível, dormiu pouco, não tem como não estar com sono.";
  }
?>
<br>
<a href="dormiubem.html">Voltar</a>



