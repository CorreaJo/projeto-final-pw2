<?php

require "../../../conexao.php";
require "../../../models/categoria.php";

mysqli_query(conexao(), ListarCategoria());

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>
    <h2><a href="#">Nova Categoria</a></h2>
    <table border="1">
        <th>Nome</th>
        <th>Ações</th>
        <tr>
            <td>
                Categoria 1
            </td>
            <td>
                <a href="#">Atualizar</a>
                <a href="#">Deletar</a>
            </td>
        </tr>
    </table>
</body>
</html>