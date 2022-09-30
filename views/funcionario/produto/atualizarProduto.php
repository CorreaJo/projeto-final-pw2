<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$nome = $_POST["nome"];
$cor = $_POST["cor"];
$desc = $_POST["descricao"];
$imagem = $_POST["imagem"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$idProduto = $_POST["idProduto"];

$con = conexao();
$update = AtualizarProduto($nome, $cor, $desc, $imagem, $categoria, $preco, $idProduto);

$query = mysqli_query($con, $update);

if($query) {
   ?>
        <h2>Atualizado com sucesso!</h2>
        <a href="produto.php">Ver produtos</a>
   <?php
}
?>