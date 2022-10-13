<?php

require "../../../conexao.php";
require "../../../models/usuario.php";

$con = conexao();
$select = ListarTudoUsuario();

$resul = mysqli_query($con, $select);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos Usuários</title>
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
</head>
<body>
    <?php require "../../../components/cabecalho.php"?>
    <h1>Todos os Usuários cadastrados</h1>

    
</body>
</html>