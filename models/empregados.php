<?php

function NovoEmpregado($nome, $endereco, $telefone, $imagem, $email, $cpf, $senha, $cargo){
    $insert = "INSERT INTO empregados (nome, endereco, telefone, imagem, email, cpf, senha, cargo) VALUES ('$nome', '$endereco', '$telefone', '$imagem', '$email', '$cpf', '$senha', '$cargo')";
    return $insert;
}

function ListarTudoEmpregado(){
    $select = "SELECT * FROM empregados";
    return $select;
}

function ListarEmpregado($idEmpregado){
    $select = "SELECT * FROM empregados WHERE idFuncionario='$idEmpregado'";
    return $select;
}

function DeleteEmpregado($idEmpregado){
    $delete = "DELETE FROM empregados WHERE idEmpregado='$idEmpregado'";
    return $delete;
}

function UpdateEmpregado($nome, $endereco, $telefone, $imagem, $email, $cpf, $idFuncionario, $senha, $cargo){
    $update = "UPDATE empregados SET nome='$nome', endereco='$endereco', telefone='$telefone', imagem='$imagem', email='$email', cpf='$cpf', senha='$senha', cargo='$cargo' WHERE idFuncionario='$idFuncionario'";
    return $update;
}