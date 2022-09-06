<?php

function insert_gerente(){
    $insert = "INSERT INTO gerente (nomeGerente, emailGerente, senhaGerente) VALUES ('$nomeGerente', '$emailGerente', password('$senhaGerente'))";
    return $insert;
}

function select_tudo_gerente(){
    $select = "SELECT * FROM gerente";
    return $select;
}

function select_where_gerente(){
    $select = "SELECT * FROM gerente WHERE idGerente='$idGerente'";
    return $select;
}

function delete_gerente(){
    $delete = "DELETE FROM gerente WHERE idGerente='$idGerente'";
    return $delete;
}

function update_gerente(){
    $update = "UPDATE gerente SET nomeGerente='$nomeGerente', emailGerente='$emailGerente', senhaGerente=password('$senhaGerente') WHERE idGerente='$idGerente'";
    return $update;
}