<?php

require "../../../conexao.php";
require "../../../models/produto.php";


$nome = $_POST["nome"];
$cor = $_POST["cor"];
$desc = $_POST["descricao"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$imagens = array_filter($_FILES['imagem']);

foreach($_FILES['imagem']['name'] as $key=>$val){ 
   // File upload path 
   $fileName = basename($_FILES['imagem']['name'][$key]); 
   //$targetFilePath = $targetDir . $fileName; 
   $fileTMP = basename($_FILES['imagem']['tmp_name'][$key]); 
   echo "$fileName <br>";
   echo "$fileTMP <br>";
   echo "---------";
}

die();

$to = "../../../public/imagens/".$imagens["name"];
echo $to;

die();

$con = conexao();
$insert = NovoProduto($nome, $cor, $desc, $imagem, $categoria, $preco);

$query = mysqli_query($con, $insert);

if($query) {
   ?>
        <h2>Cadastro feito com sucesso!</h2>
        <a href="produto.php">Ver usuarios</a>
   <?php
}
?>