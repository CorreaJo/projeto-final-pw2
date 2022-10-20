<?php

require "../../../conexao.php";
require "../../../models/categoria.php";

$nomeCategoria = $_POST["nomeCategoria"];
$idProduto = $_POST["idProduto"];

$con = conexao();
$insert = NovaCategoria($nomeCategoria, $idProduto);
$query = mysqli_query($con, $insert);

if($query){
    echo "Deu certo a inserção";
} else {
    echo mysqli_error($con);
}

?>
