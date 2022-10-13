<?php

function NovoFornecedor($nome, $cnpj){
    $insert = "INSERT INTO fornecedor (nomeFornecedor, CNPJ) VALUES ('$nome', '$cnpj')";
    return $insert;
}

function ListarTudoFornecedor(){
    $select = "SELECT * FROM fornecedor";
    return $select;
}

function ListarFornecedor($idFornecedor){
    $select = "SELECT * FROM fornecedor WHERE idFornecedor='$idFornecedor'";
    return $select;
}

function DeleteFornecedor($idFornecedor){
    $delete = "DELETE FROM fornecedor WHERE idFornecedor='$idFornecedor'";
    return $delete;
}

function UpdateFornecedor($nome, $cnpj, $idFornecedor){
    $update = "UPDATE fornecedor SET nomeFornecedor='$nome', CNPJ='$cnpj' WHERE idFornecedor='$idFornecedor'";
    return $update;
}