<?php

require "../conexao.php";
require "../models/produto.php";
require "../models/categoria.php";

$select = "SELECT * FROM produto WHERE idProduto <= 12";
$query = mysqli_query(conexao(), $select);

$queryCategoria = mysqli_query(conexao(), ListarTudoCategoria());

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/cabecalho.css">
</head>
<body>
    <?php require "../components/cabecalho.php"?>
    <div>
        <nav>
            <?php
                while($categoria = mysqli_fetch_assoc($queryCategoria)){
                    ?>
                        <a href="#"><?=$categoria["nomeCategoria"]?></a>
                    <?php
                }
            ?>
        </nav>
    </div>
    <main>
        <div id="banner">
            <h2>Lançamento</h2>
        </div>
        <div id="produtos">
            <h2>Veja Alguns dos nossos Produtos</h2>
            <div class="produtos">
                <?php
                    while($produto = mysqli_fetch_assoc($query)){
                        $preco = number_format($produto["preco"], 2, ',', '.');
                        ?>
                            <div class="produto">
                                <img src="<?=$produto["imagem"]?>" alt="">
                                <div>
                                    <h2><?=$produto["nome"]?></h2>
                                    <h3>R$<?=$preco?></h3>
                                    <a href="funcionario/produto/produto.php?idProduto=<?=$produto["idProduto"]?>">Ver Produto </a>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div id="seja-membro">
            <h2>Seja Membro</h2>
        </div>
    </main>
    <?php require "../components/rodape.php"?>    
</body>
</html>