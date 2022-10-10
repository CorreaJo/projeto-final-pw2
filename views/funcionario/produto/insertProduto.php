<?php

require "../../../conexao.php";
require "../../../models/produto.php";


$nome = $_POST["nome"];
$cor = $_POST["cor"];
$desc = $_POST["descricao"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$imagens = array_filter($_FILES['imagem']);

$con = conexao();
$insert = NovoProduto($nome, $cor, $desc, $categoria, $preco);

$query = mysqli_query($con, $insert);

foreach($_FILES['imagem']['name'] as $key=>$val){ 
   $fileName = basename($_FILES['imagem']['name'][$key]); 
   $fileTMP = basename($_FILES['imagem']['tmp_name'][$key]); 
   $to = "../../../public/imagens/".$fileName;
   move_uploaded_file($fileTMP, $to);

   $idProduto = mysqli_insert_id($con);
   $insertImagens = "INSERT INTO imagens (caminho, idProduto) VALUES ('$to', '$idProduto')";

   $query = mysqli_query($con, $insertImagens);
}


if($query) {
   ?>
        <h2>Cadastro feito com sucesso!</h2>
        <a href="produto.php">Ver usuarios</a>
   <?php
}
?>