<?php
require "../../components/cabecalho.php";

$totalValor = 0;

if(isset($_SESSION["carrinho"])){
    foreach($_SESSION["carrinho"] as $key => $value){
        $nome = $value["nome"];
        $nomeProduto = mb_strimwidth("$nome", 0, 20);
        ?>
            <div class="produtos-modal">
                <img class="" src="<?=$value["imagem"]?>" alt="">
                <h2><?=$nomeProduto?></h2>
                <h3>R$<?=$value["preco"]?></h3>
            </div>
        <?php
         $qtd = intval($value["qtd"]);
         $preco = floatval($value["preco"]);
         $totalValor = $totalValor + ($qtd * $preco);
         $valorTotal = number_format($totalValor, 2, ",", "");
    }
    ?>
    <div class="finalizar">
        <a href="processamentoEstoque.php">Finalizar Pedido</a>
    </div>
    <h3>Total: <?=$valorTotal?></h3>
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