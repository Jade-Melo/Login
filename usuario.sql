CREATE DATABASE usuariopwii;

use usuariopwii;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(100),
    senha VARCHAR(32)
)