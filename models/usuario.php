<?php

function NovoUsuario($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $img, $cargo){
    $insert = "INSERT INTO usuario (nome, endereco, telefone, email, cpf, sexo, senha, imagem, cargo) VALUES ('$nome', '$endereco', '$tel', '$email', '$cpf', '$sexo', '$senha', '$img', '$cargo')";
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

function AtualizarPedido($nome, $endereco, $tel, $email, $cpf, $sexo, $senha, $imagem, $cargo, $idUsuario){
    $update = "UPDATE usuario SET nome='$nome', endereco='$endereco', telefone='$tel', email='$email', cpf='$cpf', sexo='$sexo', senha='$senha', imagem='$imagem', cargo='$cargo' WHERE idUsuario='$idUsuario'";
    return $update;
}