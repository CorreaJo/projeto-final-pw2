<?php
require "../../components/cabecalho.php";

$logado = $_SESSION["email"];

require "../../conexao.php";
require "../../models/usuario.php";

$con = conexao();
$select = "SELECT * from usuario WHERE email='$logado'";

$resul = mysqli_query($con, $select);

$linha = mysqli_fetch_assoc($resul);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/cabecalho.css">
    <link rel="stylesheet" href="../../public/css/perfil.css">
    <title><?=$linha["nome"]?></title>
</head>
<body>
    <img src="<?=$linha["imagem"]?>" alt="<?=$linha["nome"]?>">
    <h1><?=$linha["nome"]?></h1>
    <h3><?=$linha["endereco"]?></h3>
    <h2><?=$linha["email"]?></h2>
    <a style="color: black;" href="sairUsuario.php">Sair</a>
</body>
</html>