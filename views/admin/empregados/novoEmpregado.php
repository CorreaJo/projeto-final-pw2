<?php

require "../../../conexao.php";
require "../../../models/empregados.php";

$con = conexao();

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cargo = $_POST["cargo"];
$img = $_FILES["imagem"];

$to = "../../../public/imagens/".$img['name'];
$from = $img["tmp_name"];

move_uploaded_file($from, $to);

$imagem = $to;
$insert = novoEmpregado($nome, $endereco, $telefone, $imagem, $email, $cpf, $senha, $cargo);

$query = mysqli_query($con, $insert) or die(mysqli_error($con));

if($query) {
   ?>
        <h2>Cadastro feito com sucesso!</h2>
        <a href="../index.php">Ver Empregados</a>
   <?php
}

?>