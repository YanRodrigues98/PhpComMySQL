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

insert into produto (nome,quantidade,preco,categoria) values ('computador',5,'1500.00','computadores');
insert into produto (nome,quantidade,preco,categoria) values ('video game',10,'500.00','eletronicos');
insert into produto (nome,quantidade,preco,categoria) values ('sofa',15,'2.500.00','moveis');



insert into venda (cod_produto,quantidade,pagamento,entrega,cod_cliente) values (1,5,'cartao','PREFERENCIAL','111.111.111-11');
insert into venda (cod_produto,quantidade,pagamento,entrega,cod_cliente) values (3,10,'dinheiro','PARTICULAR','198.192.165-56');
insert into venda (cod_produto,quantidade,pagamento,entrega,cod_cliente) values (2,15,'cheque','SEDEX','222.222.222-10');

--- Sempre que o campo estiver com 'AI' precisa informar os campos em () retirando sempre o campo que contém o 'AI';

select * from cliente;
select * from produto;
select * from venda;

update cliente set telefone = '(16)99856-6580' where cpf = '198.192.165-56';

update cliente set nome = 'Jessica' where CPF = '222.222.222-10';
update produto set nome = 'skate' where cod_produto = 1;
update produto set categoria = 'esportivo' where cod_produto = 1;
update venda set pagamento = 'boleto' where cod_venda = 3;


insert into cliente (CPF,nome,endereco,numero,telefone) values ('123.456.789-10','Julia','Rua Ismael',155,'1699856-6532');
delete from cliente where cpf = '123.456.789-10';

select * from produto;
select * from cliente;
select cpf from cliente;
select * from cliente where numero = 155;
select * from produto where cod_produto = 1;
select * from venda where cod_venda = 2;
select count(CPF) from cliente;
select count(categoria) from produto;
select * from cliente where cpf = '111.111.111-11' and numero = 82;
select * from cliente where cpf in ('111.111.111-11','198.192.165-56');
select * from produto where cod_produto in (1,2);
select cod_produto from venda where cod_produto in (select cod_produto from produto where nome = 'skate');
select * from cliente where cpf not in ('111.111.111-11','198.192.165-56');
select * from produto where cod_produto not in (1,3); 
select SUM(quantidade) from venda;
select MAX(quantidade) from venda;
select * from cliente where nome like '%an%';
select * from produto where nome like '%skate';
select * from cliente where nome like 'julia%';

SELECT V.valor_total, c.nome FROM venda v INNER JOIN cliente c ON v.cpf = c.cpf;
SELECT v.valor_total,p.nome FROM venda v INNER JOIN produto p on v.codProduto = p.codProduto;


    
    