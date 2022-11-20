<?php
session_start();

$idProduto = $_GET["idProduto"];
$acao = $_POST["acao"];
$qtd = $_POST["qtd"];
$nome = $_POST["nome"];
$imagem = $_POST["imagem"];
$categoria = $_POST["categoria"];
$cor = $_POST["cor"];
$tamanho = $_POST["tamanho"];
$preco = $_POST["preco"];
$preco = floatval($preco);

$preco = number_format($preco, 2, ',', '.');

// criando sessão carrinho

if(!isset($_SESSION["carrinho"])){
    $_SESSION["carrinho"] = array();
}

// adiciona o produto no carrinho

if($acao == "adicionar"){
    if(!isset($_SESSION["carrinho"][$idProduto])){
        $_SESSION["carrinho"][$idProduto]["idProduto"] = $idProduto;
        $_SESSION["carrinho"][$idProduto]["qtd"] = $qtd;
        $_SESSION["carrinho"][$idProduto]["nome"] = $nome;
        $_SESSION["carrinho"][$idProduto]["imagem"] = $imagem;
        $_SESSION["carrinho"][$idProduto]["tamanho"] = $tamanho;
        $_SESSION["carrinho"][$idProduto]["cor"] = $cor;
        $_SESSION["carrinho"][$idProduto]["categoria"] = $categoria;
        $_SESSION["carrinho"][$idProduto]["preco"] = $preco;
        
    } else {
        echo "Produto já está no carrinho!";
    }
    header("location: carrinho.php");
} else if($acao == "deletar"){
    if(isset($_SESSION["carrinho"][$idProduto])){
        $_SESSION["carrinho"][$idProduto]["idProduto"] = $idProduto;
        $_SESSION["carrinho"][$idProduto]["qtd"] = $qtd;
        $_SESSION["carrinho"][$idProduto]["nome"] = $nome;
        $_SESSION["carrinho"][$idProduto]["imagem"] = $imagem;
        $_SESSION["carrinho"][$idProduto]["tamanho"] = $tamanho;
        $_SESSION["carrinho"][$idProduto]["cor"] = $cor;
        $_SESSION["carrinho"][$idProduto]["categoria"] = $categoria;
        $_SESSION["carrinho"][$idProduto]["preco"] = $preco;
    }
    
} else {
    header("location: carrinho.php");
}

// deleta o produto do carrinho 


?>