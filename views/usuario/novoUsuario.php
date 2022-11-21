<?php
session_start();

require "../../conexao.php";
require "../../models/usuario.php";


$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$tel = $_POST["telefone"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$senha = $_POST["senha"];
$cargo = $_POST["cargo"];
$imagem = $_FILES["imagem"];

if($imagem['name'] != ""){
   $to = "../../../public/imagens/".$imagem['name'];
   $from = $imagem["tmp_name"];

   move_uploaded_file($from, $to);
} else {
   $to = "../../../public/imagens/sem-foto.png";
   $from = $imagem["tmp_name"];
}

$img = $to;

$con = conexao();
$insert = NovoUsuario($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $img, $cargo);

$query = mysqli_query($con, $insert) or die(mysqli_error($con));

if($query) {
   header("location: loginUsuario.php");
} else {
   $_SESSION["erro"] = "Complete o cadastro corretamente.";
   header("location: cadastroUsuario.php");
}
?>