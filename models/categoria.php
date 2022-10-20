<?php

function NovaCategoria($nomeCategoria, $idProduto){
    $insert = "INSERT INTO categoria (nomeCategoria, idProduto) VALUES ('$nomeCategoria', '$idProduto')";
    return $insert;
}

function ListarTudoCategoria(){
    $select = "SELECT * FROM categoria";
    return $select;
}

function ListarCategoria($idCategoria){
    $select = "SELECT * FROM categoria WHERE idCategoria='$idCategoria'";
    return $select;
}

function DeletarCategoria($idCategoria){
    $delete = "DELETE FROM categoria WHERE idCategoria='$idCategoria'";
    return $delete;
}

function AtualizarCategoria($nomeCategoria, $idProduto, $idCategoria){
    $update = "UPDATE categoria SET nomeCategoria='$nomeCategoria', idProduto='$idProduto' WHERE idCategoria='$idCategoria'";
    return $update;
}