<?php

require "../../../conexao.php";
require "../../../models/categoria.php";

$nomeCategoria = $_POST["nomeCategoria"];

$con = conexao();
$insert = NovaCategoria($nomeCategoria);
$query = mysqli_query($con, $insert);

if($query){
    echo "Deu certo a inserção";
} else {
    echo mysqli_error($con);
}

?>
