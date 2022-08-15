CREATE SCHEMA IF NOT EXISTS loja_tenis;
create table if not exists loja_tenis.funcionario (
    idFuncionario INT NOT NULL AUTO_INCREMENT,
    nome varchar(75) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(11) NULL DEFAULT NULL,
    email varchar(150) NULL DEFAULT NULL,
    cpf varchar(11) NOT NULL,
    imagem varchar(30) NOT NULL,
    primary key (idFuncionario)
);

create table if not exists loja_tenis.produto (
    idProduto INT NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    cor varchar(20) NULL DEFAULT NULL,
    descricao text(600) NULL DEFAULT NULL,
    imagem varchar(30) NULL DEFAULT NULL,
    categoria varchar(15) NULL DEFAULT NULL,
    preco decimal(9,2) NOT NULL,
    primary key (idProduto)
);