CREATE TABLE entradas (
    Identificador INT(10) NOT NULL AUTO_INCREMENT , 
    administradores_usuario INT(10) NOT NULL , 
    titulo VARCHAR(255) NOT NULL , 
    texto TEXT NOT NULL , 
    palabrasclave VARCHAR(255) NOT NULL , 
    categoriasblog_nombre INT(10) NOT NULL , 
    fecha DATE NOT NULL , 
    FOREIGN KEY (administradores_usuario) REFERENCES administradores(Identificador) ,
    FOREIGN KEY (categoriasblog_nombre) REFERENCES categoriasblog(Identificador) ,
    PRIMARY KEY (Identificador)
    ) 
    ENGINE = InnoDB;
