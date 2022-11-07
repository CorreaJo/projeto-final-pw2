<?php

function NovoProduto($nome, $cor, $desc, $categoria, $preco, $imagem){
    $insert = "INSERT INTO produto (nome, cor, descricao, categoria, preco, imagem) VALUES ('$nome', '$cor', '$desc', '$categoria', '$preco', '$imagem')";
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

function AtualizarProduto($nome, $cor, $desc, $categoria, $preco, $imagem, $idProduto){
    $update = "UPDATE produto SET nome='$nome', cor='$cor', descricao='$desc', categoria='$categoria', preco='$preco', imagem='$imagem' WHERE idProduto='$idProduto'";
    return $update;
}