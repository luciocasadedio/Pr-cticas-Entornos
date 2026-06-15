CREATE DATABASE Compras;

CREATE TABLE catalogo(
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio DECIMAL(9,2)
);

INSERT INTO catalogo(producto,precio)
VALUES
('Pan',1200.00),
('Galletitas',25.00),
('Caramelos',50.00),
('Leche',350.00);