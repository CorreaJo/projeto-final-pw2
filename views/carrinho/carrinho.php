<?php require "../../components/cabecalho.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="../../public/css/carrinho.css">
</head>
<body>
    
</body>
</html>

<?php

    if(isset($_SESSION["carrinho"])){
        foreach($_SESSION["carrinho"] as $key => $value){
            ?>
                <div class="produtos">
                    <img src="<?=$value["imagem"]?>" alt="">
                    <h2><?=$value["nome"]?></h2>
                    <h3><?=$value["cor"]?></h3>
                    <h3><?=$value["qtd"]?></h3>
                    <h3><?=$value["tamanho"]?></h3>
                    <div>
                        <form action="processamentoCarrinho.php?idProduto=<?=$value["idProduto"]?>" method="POST">
                            <input type="hidden" name="qtd" value="<?=$value["qtd"]?>">
                            <input type="hidden" name="nome" value="<?=$value["nome"]?>">
                            <input type="hidden" name="imagem" value="<?=$value["imagem"]?>">
                            <input type="hidden" name="tamanho" value="<?=$value["tamanho"]?>">
                            <input type="hidden" name="cor" value="<?=$value["cor"]?>">
                            <input type="hidden" name="categoria" value="<?=$value["categoria"]?>">
                            <input type="hidden" name="preco" value="<?=$value["preco"]?>">
                            <input type="hidden" name="acao" value="deletar">
                            <button>Deletar</button>
                        </form>
                    </div>
                </div>
            <?php
        }
    } else {
        ?>
            <h2>Não há produtos no carrinho</h2>
            <a href="../funcionario/produto/buscaProduto.php?busca=' '">Ver Produtos</a>
        <?php
    }
    

require "../../components/rodape.php";

?>