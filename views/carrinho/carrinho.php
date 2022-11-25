<?php 

require "../../components/cabecalho.php";

$totalValor = 0;
?>

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
    <?php
    if(isset($_SESSION["carrinho"])){
        ?>
        <h1 class="titulo">Carrinho</h1>
        <section class="carrinho">
            <div class="produtos">
            <?php
                    foreach($_SESSION["carrinho"] as $key => $value){
                        $precoFloat = floatval($value["preco"]);
                        $preco = number_format($precoFloat, 2, ',', '.');

                        $qtd = intval($value["qtd"]);
                        $totalValor = $totalValor + ($qtd * $precoFloat);
                        $valorTotal = number_format($totalValor, 2, ",", "");
                        ?>
                            <div class="produto">
                                <img src="<?=$value["imagem"]?>" alt="">
                                <div class="info">
                                    <h2 class="nome"><?=$value["nome"]?></h2>
                                    <p class="label">Quantidade:</p>
                                    <h3 class="qtd"><?=$value["qtd"]?></h3>
                                    <p class="label">Tamanho:</p>
                                    <h3 class="qtd"><?=$value["tamanho"]?></h3>
                                </div>
                                <h3 class="preco">R$<?=$preco?></h3>
                                    <form action="processamentoCarrinho.php?idProduto=<?=$value["idProduto"]?>" method="POST">
                                        <input type="hidden" name="qtd" value="<?=$value["qtd"]?>">
                                        <input type="hidden" name="nome" value="<?=$value["nome"]?>">
                                        <input type="hidden" name="imagem" value="<?=$value["imagem"]?>">
                                        <input type="hidden" name="tamanho" value="<?=$value["tamanho"]?>">
                                        <input type="hidden" name="cor" value="<?=$value["cor"]?>">
                                        <input type="hidden" name="categoria" value="<?=$value["categoria"]?>">
                                        <input type="hidden" name="preco" value="<?=$value["preco"]?>">
                                        <input type="hidden" name="acao" value="deletar">
                                        <button><div class="excluir ">Deletar</div></button>
                                    </form>
                            </div>
                        <?php
                    }
                    ?>
            </div>
            <div class="resumo">
                <h2 class="titulo">Resumo do Pedido</h2>
                <?php
                    foreach($_SESSION["carrinho"] as $key => $value){
                        $precoFloat = floatval($value["preco"]);
                        $preco = number_format($precoFloat, 2, ',', '.');
                        $nome = $value["nome"];
                        $nomeProduto = mb_strimwidth("$nome", 0, 20);
                        ?>
                            <div class="multi">
                                <h3><?=$nomeProduto?></h3>
                                <div>
                                    <h3 class="resumo-preco">R$<?=$preco?> x</h3>
                                    <h3><?=$value["qtd"]?></h3>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                <div class="frete">
                    <h3>Frete ---------------------------------</h3>
                    <h3>GRÁTIS</h3>
                </div>
                <div class="borda"></div>
                <div class="frete">
                    <h3>Total:</h3>
                    <h2>R$<?=$valorTotal?></h2>
                </div>
                <a class="botao" href="../pedido/finalizar-pedido.php"><div>Finalizar Pedido</div></a>
            </div>
        </section>
    <?php
    } else {
        ?>
            <h2>Não há produtos no carrinho</h2>
            <a href="../funcionario/produto/buscaProduto.php?busca=' '">Ver Produtos</a>
        <?php
    }
    ?>
</body>
</html>
