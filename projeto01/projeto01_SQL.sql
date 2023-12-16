create database crud;

/*Criar tabela usuario*/ 
create table crud.usuario(
	id int not null auto_increment primary key,
    nome varchar(250) not null,
    senha varchar(100) not null
);


create table crud.endereco(
	id int not null auto_increment primary key,
    cep varchar(9) not null, 
    rua varchar(200) not null,
    numero varchar(10) not null,
    complemento varchar(200) not null,
    cidade varchar(50) not null,
    estado varchar(20) not null,
    id_usuario int, foreign key (id_usuario) references usuario(id)
);

create table crud.telefone(
	id int not null auto_increment primary key,
    telefone varchar(14) not null,
    id_usuario int, foreign key (id_usuario) references usuario(id)
);

