<?php

require "../../conexao.php";
require "../../models/usuario.php";

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$tel = $_GET["telefone"];
$email = $_GET["email"];
$cpf = $_GET["cpf"];
$sexo = $_GET["sexo"];
$senha = $_GET["senha"];
$idUsuario = $_GET["idUsuario"];

$con = conexao();
$update = AtualizarPedido($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $idUsuario);

$query = mysqli_query($con, $update);

echo $update;

if($query) {
   ?>
        <h2>Atualizado com sucesso!</h2>
        <a href="../admin/usuarios/todosUsuarios.php">Ver usuarios</a>
   <?php
}
?>