<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$con = conexao();
$select = ListarTudoProduto();

$resul = mysqli_query($con, $select);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Produtos</title>
    <link rel="stylesheet" href="../../../public/css/cabecalho.css">
</head>
<body>
    <?php require "../../../components/cabecalho.php"?>
    <h1>Todos os produtos cadastrados</h1>

    <h2><a href="novoProduto.php">Novo produto</a></h2>

    <table border="1">
        <th>Imagem</th>
        <th>Nome</th>
        <th>Cor</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Ações</th>
            <?php
                while($linha = mysqli_fetch_assoc($resul)){
                    ?>
                    <tr>
                        <td><img src="../../../<?=$linha["imagem"]?>" alt="<?=$linha["nome"]?>"></td>
                        <td><?=$linha["nome"]?></td>
                        <td><?=$linha["cor"]?></td>
                        <td><?=$linha["descricao"]?></td>
                        <td><?=$linha["categoria"]?></td>
                        <td><?=$linha["preco"]?></td>
                        <td>
                            <a href="deletarProduto.php?idProduto=<?=$linha["idProduto"]?>">Deletar</a>
                            <a href="updateFromProduto.php?idProduto=<?=$linha["idProduto"]?>">Atualizar</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
    </table>
</body>
</html>