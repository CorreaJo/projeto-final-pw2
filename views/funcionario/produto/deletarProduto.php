<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$con = conexao();
$delete = DeleteProduto($idProduto);
$deleteImagens = "DELETE FROM imagens WHERE idProduto='$idProduto'";
$query = mysqli_query($con, $deleteImagens);
$query = mysqli_query($con, $delete);

if($query) {
   ?>
   <script>
        alert('Deletado com sucesso!')
        window.location.href='../index.php';
   </script>
   <?php
} else {
   echo mysqli_error($con);
}
?>