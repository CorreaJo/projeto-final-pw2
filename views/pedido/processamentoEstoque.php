<?php
session_start();

require "../../conexao.php";
require "../../models/produto.php";

if(isset($_SESSION["carrinho"])){
    foreach($_SESSION["carrinho"] as $key => $value){
        $quantidade = $value["qtd"];
        $idProduto = $_SESSION["carrinho"][$key]["idProduto"];
        $select = "SELECT estoque FROM produto where idProduto='$idProduto'";

        $query = mysqli_query(conexao(), $select);
        $resul = mysqli_fetch_assoc($query);

        $estoqueFinal = $resul["estoque"] - $quantidade;

        $update = "UPDATE produto SET estoque='$estoqueFinal' where idProduto='$idProduto'";
        $queryEstoque = mysqli_query(conexao(), $update);

        echo "Quantidade: ". $quantidade . "; Estoque: ". $resul["estoque"] . "; Estoque Final: ". $estoqueFinal. "<br>";
    }
}

?>