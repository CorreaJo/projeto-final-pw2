<?php

require "../../../conexao.php";
require "../../../models/fornecedor.php";

$idFornecedor = $_GET["idFornecedor"];

$con = conexao();
$delete = DeleteFornecedor($idFornecedor);

$query = mysqli_query($con, $delete);

if($query) {
   ?>
        <h2>Deletado com sucesso!</h2>
        <a href="../">Ver Fornecedores</a>
   <?php
}
?>