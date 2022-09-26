<?php

function NovoProduto(){
    $insert = "INSERT INTO produto (nome, cor, descricao, imagem, categoria, preco) VALUES ('$nome', '$cor', '$desc', '$imagem', '$categoria', '$preco')";
    return $insert;
}

function ListarTudoProduto(){
    $select = "SELECT * FROM produto";
    return $select;
}

function ListarProduto(){
    $select = "SELECT * FROM produto WHERE idProduto='$idProduto'";
    return $select;
}

function DeleteProduto(){
    $delete = "DELETE FROM produto WHERE idProduto='$idProduto'";
    return $delete;
}

function AtualizarProduto(){
    $update = "UPDATE produto SET nome='$nome', cor='$cor', descricao='$desc', imagem='$img', categoria='$categoria', preco='$preco'";
    return $update;
}