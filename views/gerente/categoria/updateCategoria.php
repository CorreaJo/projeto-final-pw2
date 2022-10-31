<?php


require "../../../conexao.php";
require "../../../models/categoria.php";

$nomeCategoria = $_POST["nomeCategoria"];
$idCategoria = $_POST["idCategoria"];

$resul = mysqli_query(conexao(), AtualizarCategoria($nomeCategoria, $idCategoria));
if($resul){
    echo "Atualizado com sucesso";
} else {
    echo mysqli_error($con);
}

?>