CREATE SCHEMA IF NOT EXISTS cordshoes;
use cordshoes;
create table if not exists cordshoes.funcionario (
    idFuncionario INT NOT NULL AUTO_INCREMENT,
    nome varchar(75) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(11) NULL DEFAULT NULL,
    email varchar(150) NULL DEFAULT NULL,
    cpf varchar(11) NOT NULL,
    imagem varchar(30) NOT NULL,
    primary key (idFuncionario)
);

create table if not exists cordshoes.fornecedor (
	idFornecedor INT NOT NULL auto_increment,
    nomeFornecedor varchar(75) NOT NULL,
    CNPJ varchar(18) NOT NULL,
    primary key (idFornecedor)
);

create table if not exists cordshoes.produto (
    idProduto INT NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    cor varchar(20) NULL DEFAULT NULL,
    descricao text(600) NULL DEFAULT NULL,
    categoria varchar(15) NULL DEFAULT NULL,
    preco decimal(9,2) NOT NULL,
    primary key (idProduto)
);

create table if not exists cordshoes.usuario (
	idUsuario INT NOT NULL auto_increment,
    nome varchar(75) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(11) NULL DEFAULT NULL,
    email varchar(150) NULL DEFAULT NULL,
    cpf varchar(14) NOT NULL,
    sexo varchar(25) NULL default NULL,
    senha varchar(10) NOT NULL,
    primary key (idUsuario)
);

create table if not exists cordshoes.categoria (
	idCategoria INT NOT NULL auto_increment,
    nomeCategoria varchar(30) NOT NULL,
    idProduto INT NOT NULL,
    primary key (idCategoria),
    CONSTRAINT fk_Produto_Categoria
		FOREIGN KEY (idProduto)
        REFERENCES cordshoes.produto (idProduto)
);

create table if not exists cordshoes.adm (
	idAdm INT NOT NULL auto_increment,
    nomeAdm varchar(75) NOT NULL,
    emailAdm varchar(150) NOT NULL,
    senhaAdm varchar (10) NOT NULL,
    primary key (idAdm)
);

create table if not exists cordshoes.gerente (
	idGerente INT NOT NULL auto_increment,
    nomeGerente varchar(75) NOT NULL,
    emailGerente varchar(150) NOT NULL,
    senhaGerente varchar (10) NOT NULL,
    primary key (idGerente)
);

create table if not exists cordshoes.pedido (
	idPedido INT NOT NULL auto_increment,
    idProduto INT NOT NULL,
    primary key (idPedido),
	CONSTRAINT fk_Produto_Pedido
		FOREIGN KEY (idProduto)
        REFERENCES cordshoes.produto (idProduto)
);

create table if not exists cordshoes.imagens (
    idImagem INT NOT NULL AUTO_INCREMENT,
    Caminho varchar(100) NOT NULL,
    idProduto INT NOT NULL,
    primary key(idImagem),
    CONSTRAINT fk_Produto_Imagem
        FOREIGN KEY (idProduto)
        REFERENCES cordshoes.produto (idProduto)
);