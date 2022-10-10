<?php

function NovoUsuario($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $img){
    $insert = "INSERT INTO usuario (nome, endereco, telefone, email, cpf, sexo, senha, imagem) VALUES ('$nome', '$endereco', '$tel', '$email', '$cpf', '$sexo', '$senha', '$img')";
    return $insert;
}

function ListarTudoUsuario(){
    $select = "SELECT * FROM usuario";
    return $select;
}

function ListarUsuario($idUsuario){
    $select = "SELECT * FROM usuario WHERE idUsuario='$idUsuario'";
    return $select;
}

function DeleteUsuario($idUsuario){
    $delete = "DELETE FROM usuario WHERE idUsuario='$idUsuario'";
    return $delete;
}

function AtualizarPedido($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $idUsuario){
    $update = "UPDATE usuario SET nome='$nome', endereco='$endereco', telefone='$tel', email='$email', cpf='$cpf', sexo='$sexo', senha='$senha' WHERE idUsuario='$idUsuario'";
    return $update;
}