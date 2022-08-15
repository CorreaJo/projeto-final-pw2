<?php

function conexao(){
    $conexao = mysqli_connect("localhost", "root", "", "loja_tenis");

    if(!$conexao) {
        die("Conexão falhou: ". mysqli_connect_error());
    }
    return $conexao;
}

function insert_produto(){
    $insert = "INSERT INTO produto (nome, cor, descricao, imagem, categoria, preco) VALUES ('$nome', '$cor', '$desc', '$imagem', '$categoria', '$preco')";
    return $insert;
}

function insert_funcionario(){
    $insert = "INSERT INTO funcionario (nome, endereco, telefone, imagem, email, cpf) VALUES ('$nome', '$endereco', '$tel', '$imagem', '$email', '$cpf')";
    return $insert;
}

function select_tudo_produto(){
    $select = "SELECT * FROM produto";
    return $select;
}

function select_tudo_funcionario(){
    $select = "SELECT * FROM funcionario";
    return $select;
}

function select_where_produto(){
    $select = "SELECT * FROM produto WHERE idProduto='$id'";
    return $select;
}
?>