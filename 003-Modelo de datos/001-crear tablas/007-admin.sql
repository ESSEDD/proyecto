CREATE TABLE administradores
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
COMMENT = 'En esta tabla guardaremos los administradores';
