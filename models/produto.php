<?php

function NovoProduto($nome, $cor, $desc, $categoria, $preco){
    $insert = "INSERT INTO produto (nome, cor, descricao, categoria, preco) VALUES ('$nome', '$cor', '$desc', '$categoria', '$preco')";
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

function AtualizarProduto($nome, $cor, $desc, $categoria, $preco, $idProduto){
    $update = "UPDATE produto SET nome='$nome', cor='$cor', descricao='$desc', categoria='$categoria', preco='$preco' WHERE idProduto='$idProduto'";
    return $update;
}