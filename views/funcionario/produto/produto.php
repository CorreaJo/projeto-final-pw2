<?php

require "../../../components/cabecalho.php";

require "../../../conexao.php";
require "../../../models/produto.php";

$idProduto = $_GET["idProduto"];

$select = ListarProduto($idProduto);
$query = mysqli_query(conexao(), $select);

$linha = mysqli_fetch_assoc($query)

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$linha["nome"]?></title>
    <link rel="stylesheet" href="../../../public/css/produto.css">
</head>
<body>
    <section>
        <div>
            <img src="<?=$linha["imagem"]?>" alt="Imagem Principal do <?=$linha["nome"]?>">
            <?php
                $inner = "SELECT caminho from produto po INNER JOIN imagens img ON po.idProduto = img.idProduto WHERE img.idProduto=".$linha["idProduto"];
                $innerResul = mysqli_query(conexao(), $inner);
                while($imagem = mysqli_fetch_assoc($innerResul)){
                    ?>
                    <img src="<?=$imagem["caminho"]?>" alt="">
                    <?php
                }
            ?>
        </div>
        <div>
            <h1>Nome do Produto: <?=$linha["nome"]?></h1>
            <h3>Cor: <?=$linha["cor"]?></h3>
            <p><?=$linha["descricao"]?></p>
            <form action="../../carrinho/processamentoCarrinho.php?idProduto=<?=$linha["idProduto"]?>" method="POST">
                <select name="qtd" id="">
                    <option value="1">1</option>
                </select>
                <input type="hidden" name="acao" value="adicionar">
                <input type="hidden" name="imagem" value="<?=$linha["imagem"]?>">
                <input type="hidden" name="nome" value="<?=$linha["nome"]?>">
                <input type="hidden" name="cor" value="<?=$linha["cor"]?>">
                <input type="hidden" name="categoria" value="<?=$linha["categoria"]?>">
                <button>Comprar</button>
            </form>
        </div>
    </section>
</body>
</html>