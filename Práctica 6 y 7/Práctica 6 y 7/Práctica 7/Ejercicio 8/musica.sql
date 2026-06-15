CREATE DATABASE prueba;

CREATE TABLE buscador(
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(100)
);

INSERT INTO buscador(canciones)
VALUES
('Bohemian Rhapsody'),
('Imagine'),
('Don\'t Stop Believin\''),
('Yellow'),
('Wonderwall'),
('The Scientist'),
('Wonderwall');