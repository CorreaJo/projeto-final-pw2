<?php

require "../../../conexao.php";
require "../../../models/produto.php";

$con = conexao();

if(!$_GET["busca"]){
    $select = ListarTudoProduto();
} else {
    $busca = $_GET["busca"];
    $select = ListarTudoProduto()." WHERE nome LIKE '%$busca%'";
}

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
        <th>Nome</th>
        <th>Cor</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Ações</th>
        <th>Imagens</th>
            <?php
                while($linha = mysqli_fetch_assoc($resul)){
                    ?>
                    <tr>
                        <td><?=$linha["nome"]?></td>
                        <td><?=$linha["cor"]?></td>
                        <td><?=$linha["descricao"]?></td>
                        <td><?=$linha["categoria"]?></td>
                        <td><?=$linha["preco"]?></td>
                        <td>
                            <a style="color: black;" href="deletarProduto.php?idProduto=<?=$linha["idProduto"]?>">Deletar</a>
                            <a href="updateFromProduto.php?idProduto=<?=$linha["idProduto"]?>">Atualizar</a>
                        </td>
                        <td>
                        <?php
                        $inner = "SELECT caminho from produto po INNER JOIN imagens img ON po.idProduto = img.idProduto WHERE img.idProduto=".$linha["idProduto"];
                        $innerResul = mysqli_query($con, $inner);
                        while($imagem = mysqli_fetch_assoc($innerResul)){
                            ?>
                            <img src="<?=$imagem["caminho"]?>" alt="">
                            <?php
                        }
                        ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
    </table>
</body>
</html>