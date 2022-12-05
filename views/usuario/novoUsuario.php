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
   // caminho Hospedagem
   $caminho = "https://pw2.cordweb.com.br/public/imagens/".$imagem['name'];
   // caminho local 
   //$caminho = "C:/Users/A8-9600/Desktop/workspace/projeto-final-pw2/public/imagens/".$imagem['name']; 
   
   $to = $caminho;
   $from = $imagem["tmp_name"];
   
   move_uploaded_file($from, $to);
} else {
   $to = "../../../public/imagens/sem-foto.png";
   $from = $imagem["tmp_name"];
}
//caminho hospedagem

$img = "https://pw2.cordweb.com.br/public/imagens/".$imagem["name"];

//caminho local
//$img = "../../../public/imagens/".$imagem["name"];

$con = conexao();
$insert = NovoUsuario($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $img, $cargo);

$query = mysqli_query($con, $insert);

if($query) {
   $_SESSION["certo"] = "Cadastro realizado com sucesso!";
   header("location: loginUsuario.php");
} else {
   $_SESSION["erro"] = "Complete o cadastro corretamente.";
   header("location: cadastroUsuario.php");
}
?>