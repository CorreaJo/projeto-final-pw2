<?php
session_start();

require "../../../conexao.php";
require "../../../models/categoria.php";

$nomeCategoria = $_POST["nomeCategoria"];

$con = conexao();
$insert = NovaCategoria($nomeCategoria);
$query = mysqli_query($con, $insert);

if($query){
    $_SESSION["certo"] = "Categoria inserida com sucesso!";
    header("location: ../index.php");
} else {
    echo mysqli_error($con);
}

?>
