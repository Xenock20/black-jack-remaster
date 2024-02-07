-- Crea la base de datos si no existe
CREATE DATABASE IF NOT EXISTS blackjack_db;

-- Usa la base de datos
USE blackjack_db;

-- Crea la tabla cuenta si no existe
CREATE TABLE IF NOT EXISTS cuenta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) UNIQUE,
    foto_code LONGBLOB,
    contraseña VARCHAR(255) NOT NULL,
    monedas INT DEFAULT 0
);

