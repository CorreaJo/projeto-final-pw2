<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$nome = $_POST["nome"];
$cor = $_POST["cor"];
$desc = $_POST["descricao"];
$imagens = array_filter($_FILES['imagem']);
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$idProduto = $_POST["idProduto"];

$con = conexao();
$update = AtualizarProduto($nome, $cor, $desc, $categoria, $preco, $idProduto);

foreach($_FILES['imagem']['name'] as $key=>$val){ 
   $fileName = $_FILES['imagem']['name'][$key];
   $fileTMP = $_FILES['imagem']['tmp_name'][$key]; 
   $to = "../../../public/imagens/".$fileName;
   move_uploaded_file($fileTMP, $to);

   $updateImagens = "UPDATE imagens set caminho='$to' where idProduto='$idProduto'";

   $queryImagens = mysqli_query($con, $updateImagens);
}

$query = mysqli_query($con, $update);

if($query) {
   ?>
        <h2>Atualizado com sucesso!</h2>
        <a href="../index.php">Ver produtos</a>
   <?php
} else {
   echo mysqli_error($con);
}
?>