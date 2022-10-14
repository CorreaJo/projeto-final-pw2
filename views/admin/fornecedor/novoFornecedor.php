<?php

require "../../../conexao.php";
require "../../../models/fornecedor.php";

$con = conexao();

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];

$insert = NovoFornecedor($nome, $cnpj);

$query = mysqli_query($con, $insert) or die(mysqli_error($con));

if($query) {
   ?>
        <h2>Cadastro feito com sucesso!</h2>
        <a href="../">Ver Fornecedores</a>
   <?php
}

?>