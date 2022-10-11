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


$queryProduto = mysqli_query($con, $insert);
$idProduto = mysqli_insert_id($con);

foreach($_FILES['imagem']['name'] as $key=>$val){ 
   $fileName = $_FILES['imagem']['name'][$key];
   $fileTMP = $_FILES['imagem']['tmp_name'][$key]; 
   $to = "../../../public/imagens/".$fileName;
   move_uploaded_file($fileTMP, $to);

   $insertImagens = "INSERT INTO imagens (caminho, idProduto) VALUES ('$to', '$idProduto')";

   $queryImagens = mysqli_query($con, $insertImagens);
}


if($queryProduto) {
   ?>
        <h2>Cadastro feito com sucesso!</h2>
        <a href="produto.php">Ver usuarios</a>
   <?php
} else {
   echo mysqli_error($con);
   echo "erro";
}
?>