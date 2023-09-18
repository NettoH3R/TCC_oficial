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

CREATE TABLE usuarios(
    user_id INT AUTO_INCREMENT PRIMARY KEY;
    nome VARCHAR(200) NOT NULL;
    email VARCHAR(200) NOT NULL;
    senha VARCHAR(40) NOT NULL;
    user_capa VARCHAR(200);
    user_perfil VARCHAR(200);
    nivel_acess INT NOT NULL;
);


INSERT INTO usuarios(nome, email, senha, user_capa, user_perfil, nivel_acess) VALUES 
('UnderSoundsADM','undersounds5@gmail.com','Undersounds2023', , , 3),
('UserArt','UserArt@gmail.com','Art12345', , , 2),
('UserNorm','UserNorm@gmail.com','Norm12345', , , 1);