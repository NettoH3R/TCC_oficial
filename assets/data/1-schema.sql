CREATE TABLE usuarios(
    user_id INT AUTO_INCREMENT PRIMARY KEY;
    nome VARCHAR(200) NOT NULL;
    email VARCHAR(200) NOT NULL;
    senha VARCHAR(40) NOT NULL;
    user_capa VARCHAR(200);
    user_perfil VARCHAR(200);
    nivel_acess INT NOT NULL
);