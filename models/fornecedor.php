<?php

function insert_fornecedor(){
    $insert = "INSERT INTO fornecedor (nomeFornecedor, CNPJ) VALUES ('$nome', '$cnpj')";
    return $insert;
}

function select_tudo_fornecedor(){
    $select = "SELECT * FROM fornecedor";
    return $select;
}

function select_where_fornecedor(){
    $select = "SELECT * FROM fornecedor WHERE idFornecedor='$idFornecedor'";
    return $select;
}

function delete_fornecedor(){
    $delete = "DELETE FROM fornecedor WHERE idFornecedor='$idFornecedor'";
    return $delete;
}

function update_fornecedor(){
    $update = "UPDATE fornecedor SET nomeFornecedor='$nome', CNPJ='$cnpj' WHERE idFornecedor='$idFornecedor'";
    return $update;
}