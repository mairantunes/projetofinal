# projetofinal
Esse projeto faz parte da Matéria  de TCC do Curso Programador Web Senai Cimatec.
======================
CRUD DE CLIENTES
======================
A ideia é criar um crud simples, para uma tabela de clientes que pode sser usado para fins variados. 
A página principal já é a listagem, com o navbar  com a logo e os dois elementos relacionados a login, que podem ser editados ou excluidos. 
----------------------

Funcionalidades:
	- CRUD SIMPLES
	- SISTEMA DE LOGIN (usuário único)
----------------------

1 - Login funcionando, com apenas um usuário cadastrado.
2 - CRUD dos contatos funcionando

----------------------

MySQL:

CREATE DATABASE agenda;

USE agenda;

CREATE TABLE usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(150),
	senha VARCHAR(20)
);

CREATE TABLE contatos(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(150),
	email VARCHAR(150),
	telefone VARCHAR(11),
	endereco VARCHAR(250)
);

INSERT INTO usuarios(nome, senha)
VALUES('admin', '123');
