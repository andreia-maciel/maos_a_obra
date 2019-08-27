CREATE DATABASE maos_a_obra
default char set utf8
default collate utf8_general_ci;

create table cadastroUsuario(
	nome varchar(64) not null,
    email varchar(64)not null,
    cpf varchar(11) not null,
	uf varchar(32) not null,
    cidade varchar(32) not null,
    endereço varchar(64),
    senha varchar(32) not null,
    primary key (cpf)    
)default charset=utf8;

select * from cadastrousuario;

create table cadastroEmpresa(
	nome varchar(64) not null,
    email varchar(64)not null,
    cnpj varchar(11) not null,
	uf varchar(32) not null,
    cidade varchar(32) not null,
    endereço varchar(64),
    senha varchar(32) not null,
    primary key (cnpj)    
)default charset=utf8;

create table mensagem(
	texto varchar(1000)not null,
    caminho_img varchar(100) not null
)default charset=utf8;

