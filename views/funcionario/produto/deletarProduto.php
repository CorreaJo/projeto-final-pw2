<?php
session_start();


require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$con = conexao();
$delete = DeleteProduto($idProduto);
$deleteImagens = "DELETE FROM imagens WHERE idProduto='$idProduto'";
$query = mysqli_query($con, $deleteImagens);
$query = mysqli_query($con, $delete);

if($query) {
   $_SESSION["certo"] = "Exclusão feita com sucesso!";
   header("location: ../index.php");
} else {
   echo mysqli_error($con);
}
?>