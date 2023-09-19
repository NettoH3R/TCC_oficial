USE application;

CREATE TABLE musicas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    genero VARCHAR(30) NOT NULL,
    caminho VARCHAR(200) NOT NULL,
    capa VARCHAR(200) NOT NULL,
    privacidade CHAR(7)NOT NULL,
    descricao VARCHAR(300)
);




INSERT INTO usuarios(nome, email, senha, nivel_acess) VALUES 
('UnderSoundsADM','undersounds5@gmail.com','Undersounds2023', 3),
('UserArt','UserArt@gmail.com','Art12345', 2),
('UserNorm','UserNorm@gmail.com','Norm12345', 1);