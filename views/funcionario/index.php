<?php
require "../../components/cabecalho.php";

if($_SESSION["cargo"] == "funcionario"){
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
        <link rel="stylesheet" href="../../../public/css/dashboardFunc.css">
    </head>
    <body>
    <div id="cadastrados">
            <h1>Produtos Cadastrados</h1>
            <a class="cadastro" href="produto/novoProduto.php">Cadastrar Novo produto</a>
            <div id="borda"></div>
            <div class="nomes">
                <div></div>
                <h2 class="nome">Nome</h2>
                <h2 class="categoria">Categoria</h2>
                <h2 class="estoque">Estoque</h2>
                <h2 class="preco">Preço</h2>
                <h2 class="acoes">Ações</h2>
            </div>
            <div id="produtos">
                    <?php
                        while($linha = mysqli_fetch_assoc($resulProduto)){
                            $preco = number_format($linha["preco"], 2, ',', '.');
                            ?>
                                <div class="produto">
                                    <img class="imagem" src="<?=$linha["imagem"]?>" alt="">
                                    <a href="produto/produto.php?idProduto=<?=$linha["idProduto"]?>"><h2 class="nome"><?=$linha["nome"]?></h2></a>
                                    <h2 class="categoria"><?=$linha["categoria"]?></h2>
                                    <p class="estoque etq"><?=$linha["estoque"]?></p>
                                    <h3 class="preco prc">R$<?=$preco?></h3>
                                    <div class="acoes">
                                        <div class="botao"><a href="produto/deletarProduto.php?idProduto=<?=$linha["idProduto"]?>">Deletar</a></div>
                                        <div class="atualizar"><a href="produto/updateFromProduto.php?idProduto=<?=$linha["idProduto"]?>">Atualizar</a></div>
                                    </div>
                                    
                                </div>
                            <?php
                        }
                    ?>
            </div>
        </div>
    </body>
    </html>
    <?php require "../../components/rodape.php"?>
    <?php
} else {
    header("location: ../");
}
?>