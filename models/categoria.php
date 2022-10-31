<?php

function NovaCategoria($nomeCategoria){
    $insert = "INSERT INTO categoria (nomeCategoria) VALUES ('$nomeCategoria')";
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

function AtualizarCategoria($nomeCategoria, $idCategoria){
    $update = "UPDATE categoria SET nomeCategoria='$nomeCategoria', WHERE idCategoria='$idCategoria'";
    return $update;
}