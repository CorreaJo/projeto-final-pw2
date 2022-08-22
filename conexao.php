<?php

function conexao(){
    $conexao = mysqli_connect("localhost", "root", "", "loja_tenis");

    if(!$conexao) {
        die("Conexão falhou: ". mysqli_connect_error());
    }
    return $conexao;
}

function insert_usuario(){
    $insert = "INSERT INTO usuario (nome, endereco, telefone, email, cpf, sexo, senha) VALUES ('$nome', '$endereco', '$tel', '$email', '$cpf', '$sexo', password('$senha'))";
    return $insert;
}




function insert_gerente(){
    $insert = "INSERT INTO gerente (nomeGerente, emailGerente, senhaGerente) VALUES ('$nomeAdm', '$emailAdm', password('$senhaAdm'))";
    return $insert;
}





function select_tudo_gerente(){
    $select = "SELECT * FROM gerente";
    return $select;
}

function select_tudo_pedido(){
    $select = "SELECT * FROM pedido";
    return $select;
}


?>