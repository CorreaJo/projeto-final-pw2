<?php

function insert_categoria(){
    $insert = "INSERT INTO categoria (nomeCategoria) VALUES ('$nomeCategoria')";
    return $insert;
}

function select_tudo_categoria(){
    $select = "SELECT * FROM categoria";
    return $select;
}

function ListarCategoria(){
    $select = "SELECT * FROM categoria WHERE idCategoria='$idCategoria'";
    return $select;
}

function delete_categoria(){
    $delete = "DELETE FROM categoria WHERE idCategoria='$idCategoria'";
    return $delete;
}

function update_categoria(){
    $update = "UPDATE categoria SET nomeCategoria='$nomeCategoria' WHERE idCategoria='$idCategoria'";
    return $update;
}