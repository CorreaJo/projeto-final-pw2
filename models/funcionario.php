<?php

function insert_funcionario(){
    $insert = "INSERT INTO funcionario (nome, endereco, telefone, imagem, email, cpf) VALUES ('$nomeFuncionario', '$enderecoFuncionario', '$telFuncionario', '$imagemFuncionario', '$emailFuncionario', '$cpfFuncionario')";
    return $insert;
}

function select_tudo_funcionario(){
    $select = "SELECT * FROM funcionario";
    return $select;
}

function select_where_funcionario(){
    $select = "SELECT * FROM funcionario WHERE idFuncionario='$idFuncionario'";
    return $select;
}

function delete_funcionario(){
    $delete = "DELETE FROM funcionario WHERE idFuncionario='$idFuncionario'";
    return $delete;
}

function update_funcionario(){
    $update = "UPDATE funcionario SET nome='$nomeFuncionario', endereco='$enderecoFuncionario', telefone='$telefoneFuncionario', imagem='$imgFuncionario', email='$emailFuncionario', cpf='$cpfFuncionario' WHERE idFuncionario='$idFuncionario'";
    return $update;
}