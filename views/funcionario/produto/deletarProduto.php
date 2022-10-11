<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$con = conexao();
$delete = DeleteProduto($idProduto);
$deleteImagens = "DELETE FROM imagens WHERE idProduto='$idProduto'";
$query = mysqli_query($con, $delete);
$query = mysqli_query($con, $deleteImagens);

if($query) {
   ?>
        <h2>Deletado com sucesso!</h2>
        <a href="produto.php">Ver produtos</a>
   <?php
} else {
   echo mysqli_error($con);
}
?>