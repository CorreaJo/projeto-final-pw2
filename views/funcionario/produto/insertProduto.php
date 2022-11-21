<?php

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

if($imagem['name'] != ""){
   $to = "../../../public/imagens/".$imagem['name'];
   $from = $imagem["tmp_name"];

   move_uploaded_file($from, $to);
} else {
   $to = "../../../public/imagens/sem-foto.png";
   $from = $imagem["tmp_name"];
}

$con = conexao();
$insert = NovoProduto($nome, $cor, $desc, $categoria, $preco, $to, $estoque, $tamanho);


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
        <script>
            alert("O produto: <?=$nome?> foi inserido com sucesso!")
            window.location.href="../index.php";   
        </script>
   <?php
} else {
   echo mysqli_error($con);
   echo "erro";
}
?>