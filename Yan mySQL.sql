use lojaVirtual;

create table Cliente (
	CPF VARCHAR(14),
    nome VARCHAR(50),
    endereco VARCHAR(80),
    numero INT,
    telefone VARCHAR(14),
    email VARCHAR(50),
    PRIMARY KEY pk_CPF (CPF)
    
);

create table Produto (
  cod_produto INT not null auto_increment,
  nome VARCHAR (50) not null,
  quantidade INT,
  preco decimal (10,3),
  categoria VARCHAR (20),
	PRIMARY KEY pk_codigo (cod_produto)
);

create table Venda (
	cod_Venda INT NOT NULL AUTO_INCREMENT,
    cod_Produto INT NOT NULL,
    quantidade INT,
    cod_cliente INT NOT NULL,
    pagamento VARCHAR(10),
    entrega VARCHAR(50),
	PRIMARY KEY pk_cod_Venda (cod_Venda)
);

ALTER TABLE CLIENTE 
	ADD COLUMN data_nascimento VARCHAR(10);
    
    
ALTER TABLE venda ADD CONSTRAINT fk_CPF
	FOREIGN KEY (cod_cliente) REFERENCES cliente (CPF); 
    
ALTER TABLE venda DROP COLUMN cod_cliente;
ALTER TABLE venda ADD COLUMN cod_cliente VARCHAR (14);
    
ALTER TABLE venda ADD CONSTRAINT fk_cod_produto
	FOREIGN KEY (cod_produto) REFERENCES produto (cod_produto);
    
    
    CREATE TABLE teste (
    codTeste int,
	nome VARCHAR(50),
    primary key (codTeste)
    );

drop table TESTE;


insert into cliente (CPF,nome,endereco,numero,telefone,email,data_nascimento) values ('111.111.111-11','Yan Rodrigues','Rua vergilio Rodrigues',82,'(16)99739-4397',
'yan.rodrigues15@hotmail.com','26/03/1998');


insert into cliente values ('222.222.222-10','Jessica cristina','Rua candito Rodrigues',593,'(16)99999-9999',
'jessica.cristina@hotmail.com','27/03/1995');

insert into cliente values ('198.192.165-56', 'Joao vitor', 'Rua saverio Lia Rolfsen', 182, '(16) 99856-6585','joaobonani@hotmail.com','08/09/1998');



update cliente set data_nascimento = '27/03/1998'
where data_nascimento = '27 /03/199'






    
    