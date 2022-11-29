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
    <title>Finalizar Pedido</title>
    <link rel="stylesheet" href="../../public/css/finalizar-pedido.css">
</head>
<body>
    <h1 class="titulo">Finalizar Pedido</h1>
    <?php

    if(isset($_SESSION["carrinho"])){
        ?>
            <div class="finalizar-pedido">
                <div>
                    <form action="#">
                        <h2>Entrega do Pedido</h2>
                        <label for="nome">Nome</label>
                        <input type="text" value="<?=$_SESSION["nome"]?>" id="nome">
                        <label for="cpf">CPF</label>
                        <input type="text" value="<?=$_SESSION["cpf"]?>" id="cpf">
                        <label for="tel">Telefone</label>
                        <input type="text" value="<?=$_SESSION["telefone"]?>" id="tel">
                        <label for="endereco">Endereço</label>
                        <input type="text" value="<?=$_SESSION["endereco"]?>" id="endereco">
                        <label for="email">Email</label>
                        <input type="text" value="<?=$_SESSION["email"]?>" id="email">
                        <label for="entrega">Entrega</label>
                        <input type="text" name="entrega" id="entrega" placeholder="Endereço para entrega">
                        <label for="cep">Cep:</label>
                        <input type="text" name="cep" id="cep" placeholder="Cep da Rua">
                    </form> 
                </div>
                <div class="produtos">
                    <h2>Pedido</h2>
                    <?php
                    foreach($_SESSION["carrinho"] as $key => $value){
                        $nome = $value["nome"];
                        $nomeProduto = mb_strimwidth("$nome", 0, 20);
                        ?>
                            <div class="finalizar-produto">
                                <img class="" src="<?=$value["imagem"]?>" alt="">
                                <h2><?=$nomeProduto?></h2>
                                <h3>Preço ---------------------- R$<?=$value["preco"]?> x <?=$value["qtd"]?></h3>
                            </div>
                        <?php
                        $qtd = intval($value["qtd"]);
                        $preco = floatval($value["preco"]);
                        $totalValor = $totalValor + ($qtd * $preco);
                        $valorTotal = number_format($totalValor, 2, ",", "");
                    }
                    ?>
                    <h3 class="valorTotal">Valor Total ---------------------------------------------------- <?=$valorTotal?></h3>
                    <div class="botao-finalizar">
                        <a href="processamentoEstoque.php">Finalizar Pedido</a>
                    </div>
                </div>
            </div>
        <?php
    } else {
        ?>
            <div class="nao-ha">
                <h2>Não há produtos no carrinho</h2>
                <a class="link-produtos" href="../../../views/funcionario/produto/buscaProduto.php?busca=' '">Ver Produtos</a>
            </div>
        <?php
    }

    ?>
</body>
</html>