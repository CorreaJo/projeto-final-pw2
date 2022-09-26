<?php

function NovoGerente(){
    $insert = "INSERT INTO gerente (nomeGerente, emailGerente, senhaGerente) VALUES ('$nomeGerente', '$emailGerente', password('$senhaGerente'))";
    return $insert;
}

function ListarTudoGerente(){
    $select = "SELECT * FROM gerente";
    return $select;
}

function ListarGerente(){
    $select = "SELECT * FROM gerente WHERE idGerente='$idGerente'";
    return $select;
}

function DeleteGerente(){
    $delete = "DELETE FROM gerente WHERE idGerente='$idGerente'";
    return $delete;
}

function AtualizarGerente(){
    $update = "UPDATE gerente SET nomeGerente='$nomeGerente', emailGerente='$emailGerente', senhaGerente=password('$senhaGerente') WHERE idGerente='$idGerente'";
    return $update;
}