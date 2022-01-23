CREATE DATABASE empresa CHARACTER SET utf8mb3;
USE empresa;
CREATE TABLE IF NOT EXISTS usuarios(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20),
    apellidos VARCHAR(20),
    email VARCHAR(20) NOT NULL,
    passwd VARCHAR(20) NOT NULL,
    rol CHAR(10)
);
INSERT INTO usuarios(nombre, apellidos, email, passwd, rol)
VALUES (
        'Juan',
        'Fdez Glez',
        'juan@mail.com',
        'pass1234',
        'user'
    );
INSERT INTO usuarios(nombre, apellidos, email, passwd, rol)
VALUES (
        'Ana',
        'García',
        'ana@mail.com',
        'pass1234',
        'user'
    );