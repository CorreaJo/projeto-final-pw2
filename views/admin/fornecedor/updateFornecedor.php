<?php
session_start();

require "../../../conexao.php";
require "../../../models/empregados.php";

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$idFornecedor = $_POST["idFornecedor"];

$con = conexao();
$update = UpdateFornecedor($nome, $cnpj, $idFornecedor);

$query = mysqli_query($con, $update);

if($query){
   $_SESSION["certo"] = "$nome atualizado com sucesso!";
   header("location: ../index.php");
} else {
   $_SESSION["erro"] = "Erro na atualização do fornecedor!";
   header("location: ../index.php");
}
?>