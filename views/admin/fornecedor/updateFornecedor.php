<?php

require "../../../conexao.php";
require "../../../models/empregados.php";

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$idFornecedor = $_POST["idFornecedor"];

$con = conexao();
$update = UpdateFornecedor($nome, $cnpj, $idFornecedor);

$query = mysqli_query($con, $update);

if($query) {
   ?>
        <h2>Atualizado com sucesso!</h2>
        <a href="../">Ver Fornecedores</a>
   <?php
}
?>