CREATE DATABASE dbHQSTORE;
USE dbHQSTORE;

CREATE TABLE tbCategorias (
  idCategoria INTEGER  NOT NULL auto_increment,
  Desc_Categoria VARCHAR(100) NULL,
  PRIMARY KEY(idCategoria)
);

CREATE TABLE tbEditoraO (
  idEditoraO INTEGER  NOT NULL auto_increment,
  Nome_EditoraO VARCHAR(100) NOT NULL,
  PRIMARY KEY(idEditoraO)
);

CREATE TABLE tbEditoraN (
  idEditoraN INTEGER  NOT NULL auto_increment,
  Nome_EditoraN VARCHAR(100) NOT NULL,
  PRIMARY KEY(idEditoraN)
);

CREATE TABLE tbEdicao (
idEdicao INTEGER NOT NULL auto_increment,
TipoEdicao VARCHAR(255) NOT NULL,
PRIMARY KEY (idEdicao)
); 

CREATE TABLE tbProdutos (
  idProduto integer NOT NULL auto_increment ,
  Nome_Produto VARCHAR (256) NOT NULL,
  kappa TEXT NOT NULL, /* Área para salvar o diretório das imagens */
  Desc_Produto TEXT  NOT NULL,
  PrecoVenda_Produto decimal(10, 2) NOT NULL,
  QteEstoque_Produto integer NOT NULL,
  idCategoria integer NOT NULL,
  idEditoraO integer NOT NULL,
  idEditoraN integer NOT NULL,
  idEdicao integer NOT NULL,  
  PRIMARY KEY (idProduto),
  FOREIGN KEY (idCategoria)
  REFERENCES tbCategorias (idCategoria),
  FOREIGN KEY (idEditoraO)
  REFERENCES tbEditoraO (idEditoraO),
  FOREIGN KEY (idEditoraN)
  REFERENCES tbEditoraN (idEditoraN),
  FOREIGN KEY (idEdicao) /* Está funcionando agora :D De nada.*/
  REFERENCES tbEdicao (idEdicao)
  );

CREATE TABLE tbEstado(
idEstado integer NOT NULL auto_increment,
Estado varchar(60) NOT NULL,
PRIMARY KEY(idEstado));

CREATE TABLE tbCidade(
idCidade integer NOT NULL auto_increment,
Cidade varchar(256) NOT NULL,
idEstado integer NOT NULL,
PRIMARY KEY(idCidade),
FOREIGN KEY(idEstado)
REFERENCES tbEstado(idEstado));

CREATE TABLE tbCliente (
idCliente integer NOT NULL auto_increment,
Nome_Cliente varchar(256) NOT NULL,
Data_Nascimento DATE NOT NULL, 
CPF integer NOT NULL,
idEstado integer NOT NULL,
idCidade integer NOT NULL,
endereco_Cliente varchar(256) NOT NULL,
email varchar(255) NOT NULL,
senha varchar(255) NOT NULL,
PRIMARY KEY (idCliente),
FOREIGN KEY (idEstado)
REFERENCES tbEstado (idEstado),
FOREIGN KEY (idCidade)
REFERENCES tbCidade (idCidade));

CREATE TABLE tbMeiosPagamento(
idMeioPagamento integer NOT NULL auto_increment,
MeioPagamento varchar(100) NOT NULL,
PRIMARY KEY (idMeioPagamento));

CREATE TABLE Vendas(
idVenda integer NOT NULL auto_increment,
idProduto integer NOT NULL,
idCliente integer NOT NULL,
idMeioPagamento integer NOT NULL,
QteProduto integer NOT NULL,
ValorTotal double NOT NULL,
PRIMARY KEY (idVenda),
FOREIGN KEY (idProduto)
REFERENCES tbProdutos (idProduto),
FOREIGN KEY (idCliente)
REFERENCES tbCliente (idCliente),
FOREIGN KEY (idMeioPagamento)
REFERENCES tbMeiosPagamento (idMeioPagamento));

  
 
 














