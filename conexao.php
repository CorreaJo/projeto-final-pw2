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

function insert_fornecedor(){
    $insert = "INSERT INTO fornecedor (nomeFornecedor, CNPJ) VALUES ('$nome', '$cnpj')";
    return $insert;
}

function insert_usuario(){
    $insert = "INSERT INTO usuario (nome, endereco, telefone, email, cpf, sexo, senha) VALUES ('$nome', '$endereco', '$tel', '$email', '$cpf', '$sexo', password('$senha'))";
    return $insert;
}

function insert_funcionario(){
    $insert = "INSERT INTO funcionario (nome, endereco, telefone, imagem, email, cpf) VALUES ('$nome', '$endereco', '$tel', '$imagem', '$email', '$cpf')";
    return $insert;
}

function insert_categoria(){
    $insert = "INSERT INTO categoria (nomeCategoria) VALUES ('$nome')";
    return $insert;
}

function insert_adm(){
    $insert = "INSERT INTO adm (nomeAdm, emailAdm, senhaAdm) VALUES ('$nomeAdm', '$emailAdm', password('$senhaAdm'))";
    return $insert;
}

function insert_gerente(){
    $insert = "INSERT INTO gerente (nomeGerente, emailGerente, senhaGerente) VALUES ('$nomeAdm', '$emailAdm', password('$senhaAdm'))";
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

function select_tudo_fornecedor(){
    $select = "SELECT * FROM fornecedor";
    return $select;
}

function select_tudo_adm(){
    $select = "SELECT * FROM adm";
    return $select;
}

function select_tudo_gerente(){
    $select = "SELECT * FROM gerente";
    return $select;
}

function select_tudo_pedido(){
    $select = "SELECT * FROM pedido";
    return $select;
}

function select_tudo_categoria(){
    $select = "SELECT * FROM categoria";
    return $select;
}

function select_where_produto(){
    $select = "SELECT * FROM produto WHERE idProduto='$id'";
    return $select;
}

function select_where_funcionario(){
    $select = "SELECT * FROM funcionario WHERE idFuncionario='$id'";
    return $select;
}
?>