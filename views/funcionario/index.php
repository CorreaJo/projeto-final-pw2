<?php
require "../../conexao.php";
require "../../models/pedido.php";
require "../../models/produto.php";

$con = conexao();

// crud pedido
$selectPedido = ListarTudoPedido();
$resulPedido = mysqli_query($con, $selectPedido);
// crud produto
$selectProduto = ListarTudoProduto();
$resulProduto = mysqli_query($con, $selectProduto);

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
    <?php require "../../components/cabecalho.php"?>
    <h1>Todos os produtos cadastrados</h1>

    <h2><a href="produto/novoProduto.php">Novo produto</a></h2>

    <table border="1">
        <th>Nome</th>
        <th>Cor</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Ações</th>
        <th>Imagens</th>
            <?php
                while($linha = mysqli_fetch_assoc($resulProduto)){
                    ?>
                    <tr>
                        <td><?=$linha["nome"]?></td>
                        <td><?=$linha["cor"]?></td>
                        <td><?=$linha["descricao"]?></td>
                        <td><?=$linha["categoria"]?></td>
                        <td><?=$linha["preco"]?></td>
                        <td>
                            <a style="color: black;" href="produto/deletarProduto.php?idProduto=<?=$linha["idProduto"]?>">Deletar</a>
                            <a href="produto/updateFromProduto.php?idProduto=<?=$linha["idProduto"]?>">Atualizar</a>
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