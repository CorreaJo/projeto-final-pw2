<?php

require "../../../conexao.php";
require "../../../models/produto.php";


$nome = $_POST["nome"];
$cor = $_POST["cor"];
$desc = $_POST["descricao"];
$imagem = $_POST["imagem"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];


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