<?php

function insert_funcionario(){
    $insert = "INSERT INTO funcionario (nome, endereco, telefone, imagem, email, cpf) VALUES ('$nome', '$endereco', '$tel', '$imagem', '$email', '$cpf')";
    return $insert;
}

function select_tudo_funcionario(){
    $select = "SELECT * FROM funcionario";
    return $select;
}

function select_where_funcionario(){
    $select = "SELECT * FROM funcionario WHERE idFuncionario='$id'";
    return $select;
}

function delete_funcionario(){
    $delete = "DELETE FROM funcionario WHERE idFuncionario='$id'";
    return $delete;
}

function update_funcionario(){
    $update = "UPDATE funcionario SET nome='$nome', endereco='$endereco', telefone='$telefone', imagem='$img', email='$email', cpf='$cpf'";
    return $update;
}