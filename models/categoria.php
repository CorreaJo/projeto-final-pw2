<?php

function insert_categoria(){
    $insert = "INSERT INTO categoria (nomeCategoria) VALUES ('$nome')";
    return $insert;
}

function select_tudo_categoria(){
    $select = "SELECT * FROM categoria";
    return $select;
}

function select_where_adm(){
    $select = "SELECT * FROM categoria WHERE idCategoria='$id'";
    return $select;
}

function delete_categoria(){
    $delete = "DELETE FROM categoria WHERE idCategoria='$id'";
    return $delete;
}

function update_categoria(){
    $update = "UPDATE categoria SET nomeCategoria='$nome'";
    return $update;
}