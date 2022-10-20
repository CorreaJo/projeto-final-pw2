<?php

require "../../../conexao.php";
require "../../../models/categoria.php";

$idCategoria = $_GET["idCategoria"];

$con = conexao();
$delete = DeletarCategoria($idCategoria);
$query = mysqli_query($con, $delete);

if($query){
    echo "Deletado com sucesso";
} else {
    echo mysqli_error($con);
}


?>