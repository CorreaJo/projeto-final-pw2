<?php
session_start();

require "../../../conexao.php";
require "../../../models/produto.php";

$nome = $_POST["nome"];
$cor = $_POST["cor"];
$desc = $_POST["descricao"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];
$tamanho = $_POST["tamanho"];
$imagem = $_FILES["principal"];
$imagens = array_filter($_FILES['imagem']);
$idProduto = $_POST["idProduto"];

if($imagem['name'] != ""){
   $to = "../../../public/imagens/".$imagem['name'];
   $from = $imagem["tmp_name"];

   move_uploaded_file($from, $to);
} else {
   $to = "../../../public/imagens/sem-foto.png";
   $from = $imagem["tmp_name"];
}

$con = conexao();
$update = AtualizarProduto($nome, $cor, $desc, $categoria, $preco, $to, $estoque, $tamanho, $idProduto);

foreach($_FILES['imagem']['name'] as $key=>$val){ 
   $fileName = $_FILES['imagem']['name'][$key];
   $fileTMP = $_FILES['imagem']['tmp_name'][$key]; 
   $to = "../../../public/imagens/".$fileName;
   move_uploaded_file($fileTMP, $to);

   $insertImagens = "INSERT INTO imagens (caminho, idProduto) VALUES ('$to', '$idProduto')";

   $queryImagens = mysqli_query($con, $insertImagens);
}


$query = mysqli_query($con, $update);

if($query) {
   $_SESSION["certo"] = "$nome atualizado com sucesso!";
   header("location: ../index.php");
} else {
   $_SESSION["erro"] = "Erro na atualização do produto!";
   header("location: ../index.php");
}
?>