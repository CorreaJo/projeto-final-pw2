<?php
session_start();

require "../../../conexao.php";
require "../../../models/fornecedor.php";

$con = conexao();

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];

$insert = NovoFornecedor($nome, $cnpj);

$query = mysqli_query($con, $insert) or die(mysqli_error($con));

if($query){
   $_SESSION["certo"] = "$nome inserido com sucesso!";
   header("location: ../index.php");
} else {
   $_SESSION["erro"] = "Erro na inserção do fornecedor!";
   header("location: ../index.php");
}

?>