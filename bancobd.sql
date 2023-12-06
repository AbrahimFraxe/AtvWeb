CREATE database atv;

CREATE TABLE usuarios(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(120) NOT NULL,
        sobrenome VARCHAR(120),
        email VARCHAR(50)
        );    

$sql = "INSERT INTO `usuarios` (`nome`, `sobrenome`, `email`)
        VALUES ('Rodrigo', 'Viana','rodrigoviana@gmail.com'),
               ('Abrahim', 'Neto','abrahimneto@gmail.com');";

SELECT nome, sobrenome From usuarios";