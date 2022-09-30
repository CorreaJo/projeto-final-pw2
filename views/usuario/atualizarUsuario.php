<?php

require "../../conexao.php";
require "../../models/usuario.php";

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$tel = $_POST["telefone"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$senha = $_POST["senha"];
$idUsuario = $_POST["idUsuario"];

$con = conexao();
$update = AtualizarPedido($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $idUsuario);

$query = mysqli_query($con, $update);

if($query) {
   ?>
        <h2>Atualizado com sucesso!</h2>
        <a href="../admin/usuarios/todosUsuarios.php">Ver usuarios</a>
   <?php
}
?>