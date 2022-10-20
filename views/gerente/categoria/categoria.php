<?php

require "../../../conexao.php";
require "../../../models/categoria.php";

$resul = mysqli_query(conexao(), ListarTudoCategoria());

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
    <?php require "../../../components/cabecalho.php";?>
    <h1>Categorias</h1>
    <h2><a href="cadastroCategoria.php">Nova Categoria</a></h2>
    <table border="1">
        <th>Nome</th>
        <th>Ações</th>
        <?php
            while($linha = mysqli_fetch_assoc($resul)){
                ?>
            <tr>
                <td>
                    <?=$linha["nomeCategoria"]?>
                </td>
                <td>
                    <a href="UpdateFormCategoria.php?idCategoria=<?=$linha["idCategoria"]?>">Atualizar</a>
                    <a href="deletarCategoria.php?idCategoria=<?=$linha["idCategoria"]?>">Deletar</a>
                </td>
            </tr>
                <?php
            }

        ?>
    </table>
</body>
</html>