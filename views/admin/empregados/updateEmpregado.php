<?php

require "../../../conexao.php";
require "../../../models/empregados.php";

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$tel = $_POST["telefone"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$senha = $_POST["senha"];
$idEmpregado = $_POST["idEmpregado"];

$con = conexao();
$update = UpdateEmpregado($nome, $endereco, $telefone, $imagem, $email, $cpf, $idEmpregado, $senha, $cargo);

$query = mysqli_query($con, $update);

if($query) {
   ?>
        <h2>Atualizado com sucesso!</h2>
        <a href="../">Ver Empregados</a>
   <?php
}
?>