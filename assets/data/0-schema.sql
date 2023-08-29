CREATE DATABASE application;
USE application;

CREATE TABLE musicas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    genero VARCHAR(30) NOT NULL,
    caminho VARCHAR(100) NOT NULL,
    capa VARCHAR(100) NOT NULL,
    privacidade CHAR(7)NOT NULL,
    decricao VARCHAR(300)
);