<?php


require "../../../conexao.php";
require "../../../models/categoria.php";

$nomeCategoria = $_POST["nomeCategoria"];
$idProduto = $_POST["idProduto"];
$idCategoria = $_POST["idCategoria"];

$resul = mysqli_query(conexao(), AtualizarCategoria($nomeCategoria, $idProduto, $idCategoria));
if($resul){
    echo "Atualizado com sucesso";
} else {
    echo mysqli_error($con);
}

?>