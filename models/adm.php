<?php

function insert_adm(){
    $insert = "INSERT INTO adm (nomeAdm, emailAdm, senhaAdm) VALUES ('$nomeAdm', '$emailAdm', password('$senhaAdm'))";
    return $insert;
}

function select_tudo_adm(){
    $select = "SELECT * FROM adm";
    return $select;
}

function select_where_adm(){
    $select = "SELECT * FROM adm WHERE idAdm='$idAdm'";
    return $select;
}

function delete_adm(){
    $delete = "DELETE FROM adm WHERE idAdm='$idAdm'";
    return $delete;
}

function update_adm(){
    $update = "UPDATE adm SET nomeAdm='$nomeAdm', emailAdm='$emailAdm', senhaAdm=password('$senhaAdm)'";
    return $update;
}