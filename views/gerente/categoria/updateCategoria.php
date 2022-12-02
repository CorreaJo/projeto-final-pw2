<?php
session_start();

require "../../../conexao.php";
require "../../../models/categoria.php";

$nomeCategoria = $_POST["nomeCategoria"];
$idCategoria = $_POST["idCategoria"];

$resul = mysqli_query(conexao(), AtualizarCategoria($nomeCategoria, $idCategoria));
if($resul){
    $_SESSION["certo"] = "$nomeCategoria inserida com sucesso!";
    header("location: ../index.php");
} else {
    $_SESSION["erro"] = "Erro na atualização da categoria!";
    header("location: ../index.php");
}

?>