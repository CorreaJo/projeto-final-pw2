<?php

require "../../../conexao.php";
require "../../../models/categoria.php";

$idCategoria = $_GET["idCategoria"];

$resul = mysqli_query(conexao(), ListarCategoria($idCategoria));
$linha = mysqli_fetch_assoc($resul);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Categoria</title>
</head>
<body>
    <h1>Atualizar Categoria</h1>
    <form action="updateCategoria.php" method="post">
        <input type="text" name="nomeCategoria" value="<?=$linha["nomeCategoria"]?>">
        <input type="text" name="idProduto" value="<?=$linha["idProduto"]?>">
        <input type="hidden" name="idCategoria" value="<?=$linha["idCategoria"]?>">
        <button>Atualizar</button>
    </form>
</body>
</html>