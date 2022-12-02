<?php
session_start();

require "../../../conexao.php";
require "../../../models/categoria.php";

$idCategoria = $_GET["idCategoria"];

$con = conexao();
$delete = DeletarCategoria($idCategoria);
$query = mysqli_query($con, $delete);

if($query){
    $_SESSION["certo"] = "Categoria excluída com sucesso!";
    header("location: ../index.php");
} else {
    $_SESSION["erro"] = "Erro na exclusão da categoria!";
    header("location: ../index.php");
}

?>