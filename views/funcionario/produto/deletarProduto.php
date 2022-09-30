<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$con = conexao();
$delete = DeleteProduto($idProduto);

$query = mysqli_query($con, $delete);

if($query) {
   ?>
        <h2>Deletado com sucesso!</h2>
        <a href="produto.php">Ver produtos</a>
   <?php
}
?>