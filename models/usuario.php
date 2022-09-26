<?php

function NovoUsuario(){
    $insert = "INSERT INTO usuario (nome, endereco, telefone, email, cpf, sexo, senha) VALUES ('$nome', '$endereco', '$tel', '$email', '$cpf', '$sexo', password('$senha'))";
    return $insert;
}

function ListarTudoUsuario(){
    $select = "SELECT * FROM usuario";
    return $select;
}

function ListarUsuario(){
    $select = "SELECT * FROM usuario WHERE idUsuario='$idUsuario'";
    return $select;
}

function DeleteUsuario(){
    $delete = "DELETE FROM usuario WHERE idUsuario='$idUsuario'";
    return $delete;
}

function AtualizarPedido(){
    $update = "UPDATE usuario SET nome='$nome', endereco='$endereco', telefone='$tel', email='$email', cpf='$cpf', sexo='$sexo', senha=password('$senha')";
    return $update;
}