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