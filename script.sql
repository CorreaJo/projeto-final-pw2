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

create table if not exists loja_tenis.fornecedor (
	idFornecedor INT NOT NULL auto_increment,
    nomeFornecedor varchar(75) NOT NULL,
    CNPJ varchar(18) NOT NULL,
    primary key (idFornecedor)
);

create table if not exists loja_tenis.produto (
    idProduto INT NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    cor varchar(20) NULL DEFAULT NULL,
    descricao text(600) NULL DEFAULT NULL,
    imagem varchar(30) NULL DEFAULT NULL,
    categoria varchar(15) NULL DEFAULT NULL,
    preco decimal(9,2) NOT NULL,
    idFornecedor INT NOT NULL,
    primary key (idProduto),
    CONSTRAINT fk_Fornecedor_Produto
		FOREIGN KEY (idFornecedor)
        REFERENCES loja_tenis.fornecedor (idFornecedor)
);

create table if not exists loja_tenis.usuario (
	idUsuario INT NOT NULL auto_increment,
    nome varchar(75) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(11) NULL DEFAULT NULL,
    email varchar(150) NULL DEFAULT NULL,
    cpf varchar(11) NOT NULL,
    sexo varchar(1) NULL default NULL,
    senha varchar(10) NOT NULL,
    primary key (idUsuario)
);

create table if not exists loja_tenis.categoria (
	idCategoria INT NOT NULL auto_increment,
    nomeCategoria varchar(30) NOT NULL,
    idProduto INT NOT NULL,
    primary key (idCategoria),
    CONSTRAINT fk_Produto_Categoria
		FOREIGN KEY (idProduto)
        REFERENCES loja_tenis.produto (idProduto)
);

create table if not exists loja_tenis.adm (
	idAdm INT NOT NULL auto_increment,
    nomeAdm varchar(75) NOT NULL,
    emailAdm varchar(150) NOT NULL,
    senhaAdm varchar (10) NOT NULL,
    primary key (idAdm)
);

create table if not exists loja_tenis.gerente (
	idGerente INT NOT NULL auto_increment,
    nomeGerente varchar(75) NOT NULL,
    emailGerente varchar(150) NOT NULL,
    senhaGerente varchar (10) NOT NULL,
    primary key (idGerente)
);

create table if not exists loja_tenis.pedido (
	idPedido INT NOT NULL auto_increment,
    idProduto INT NOT NULL,
    primary key (idPedido),
	CONSTRAINT fk_Produto_Pedido
		FOREIGN KEY (idProduto)
        REFERENCES loja_tenis.produto (idProduto)
);
