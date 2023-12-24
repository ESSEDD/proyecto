CREATE TABLE usuarios
(
    Identificador INT(10) NOT NULL AUTO_INCREMENT ,
    usuario VARCHAR(50) NOT NULL ,
    contrasena VARCHAR(50) NOT NULL ,
    nombre VARCHAR(50) NOT NULL ,
    apellidos VARCHAR(100) NOT NULL ,
    email VARCHAR(50) NOT NULL ,
    imagen VARCHAR(50) NOT NULL ,
    PRIMARY KEY (Identificador)
)
ENGINE = InnoDB
COMMENT = 'En esta tabla guardaremos los usuarios';

INSERT INTO `usuarios` (`Identificador`, `usuario`, `contrasena`, `nombre`, `apellidos`, `email`, `telefono`, `imagen`) 
VALUES (NULL, 'sedimu', 'sedimu', 'Sergio', 'Díaz Muñoz', 'sergiodiazmu@hotmail.com', '', 'sedimu.jpg');