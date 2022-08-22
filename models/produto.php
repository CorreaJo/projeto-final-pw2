<?php

function insert_produto(){
    $insert = "INSERT INTO produto (nome, cor, descricao, imagem, categoria, preco) VALUES ('$nome', '$cor', '$desc', '$imagem', '$categoria', '$preco')";
    return $insert;
}

function select_tudo_produto(){
    $select = "SELECT * FROM produto";
    return $select;
}

function select_where_produto(){
    $select = "SELECT * FROM produto WHERE idProduto='$id'";
    return $select;
}

function delete_produto(){
    $delete = "DELETE FROM produto WHERE idProduto='$id'";
    return $delete;
}

function update_produto(){
    $update = "UPDATE produto SET nome='$nome', cor='$cor', descricao='$desc', imagem='$img', categoria='$categoria', preco='$preco'";
    return $update;
}