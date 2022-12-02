<?php
session_start();
require "../../conexao.php";

$idUsuario = $_POST["idUsuario"];
$senha = $_POST["senha"];
$senhaC = $_POST["senhaC"];

if($senha == $senhaC){
    $update = "UPDATE usuario set senha='$senhaC' WHERE idUsuario='$idUsuario'";
} else {
    $_SESSION["erro"] = "As senhas não são as mesmas!";
    header("location: formSenhaUsuario.php?idUsuario=$idUsuario");
}

$query = mysqli_query(conexao(), $update);

if($query){
    $_SESSION["certo"] = "Senha atualizada com sucesso!";
    header("location: perfilUsuario.php");
} else {
    $_SESSION["erro"] = "Erro na atualização da senha!";
    header("location: perfilUsuario.php");
}

?>