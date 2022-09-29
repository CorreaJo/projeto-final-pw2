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


$con = conexao();
$insert = NovoUsuario($nome, $endereco, $tel, $email, $cpf, $sexo, $senha);

$query = mysqli_query($con, $insert);

if($query) {
   ?>
        <h2>Cadastro feito com sucesso!</h2>
        <a href="../admin/usuarios/todosUsuarios.php">Ver usuarios</a>
   <?php
}
?>