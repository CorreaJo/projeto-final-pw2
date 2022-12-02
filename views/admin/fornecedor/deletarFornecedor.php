<?php
session_start();

require "../../../conexao.php";
require "../../../models/fornecedor.php";

$idFornecedor = $_GET["idFornecedor"];

$con = conexao();
$delete = DeleteFornecedor($idFornecedor);

$query = mysqli_query($con, $delete);

if($query){
   $_SESSION["certo"] = "Fornecedor excluído com sucesso!";
   header("location: ../index.php");
} else {
   $_SESSION["erro"] = "Erro na exclusão do fornecedor!";
   header("location: ../index.php");
}
?>