<?php

function NovoProduto($nome, $cor, $desc, $categoria, $preco, $imagem, $estoque, $tamanho){
    $insert = "INSERT INTO produto (nome, cor, descricao, categoria, preco, imagem, estoque, tamanho) VALUES ('$nome', '$cor', '$desc', '$categoria', '$preco', '$imagem', '$estoque', '$tamanho')";
    return $insert;
}

function ListarTudoProduto(){
    $select = "SELECT * FROM produto";
    return $select;
}

function ListarProduto($idProduto){
    $select = "SELECT * FROM produto WHERE idProduto='$idProduto'";
    return $select;
}

function DeleteProduto($idProduto){
    $delete = "DELETE FROM produto WHERE idProduto='$idProduto'";
    return $delete;
}

function AtualizarProduto($nome, $cor, $desc, $categoria, $preco, $imagem, $estoque, $tamanho, $idProduto){
    $update = "UPDATE produto SET nome='$nome', cor='$cor', descricao='$desc', categoria='$categoria', preco='$preco', imagem='$imagem', estoque='$estoque', tamanho='$tamanho' WHERE idProduto='$idProduto'";
    return $update;
}