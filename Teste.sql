CREATE DATABASE Teste;

USE Teste;
CREATE TABLE usuarios (
	id int auto_increment primary key,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    data_de_nascimento DATE,
    genero ENUM('masculino', 'feminino', 'outro') 
);

select *from usuarios;