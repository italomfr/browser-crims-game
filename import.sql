-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS thegangs_db;

-- Selecionar o banco de dados
USE thegangs_db;

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Tabela de personagens
CREATE TABLE IF NOT EXISTS personagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    nome_personagem VARCHAR(100) NOT NULL,
    gangue_personagem VARCHAR(100),
    nivel INT,
    experiencia INT,
    vida INT,
    estamina INT,
    forca INT,
    inteligencia INT,
    destreza INT,
    vitalidade INT,
    dinheiro DECIMAL(10,2),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
