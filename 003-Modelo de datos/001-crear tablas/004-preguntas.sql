CREATE TABLE preguntas (
    Identificador INT(10) NOT NULL AUTO_INCREMENT , 
    usuarios_usuario INT(10) NOT NULL , titulo VARCHAR(255) NOT NULL , 
    texto TEXT NOT NULL , palabrasclave VARCHAR(255) NOT NULL , 
    categorias_nombre INT(10) NOT NULL , fecha DATE NOT NULL , 
    FOREIGN KEY (usuarios_usuario) REFERENCES usuarios(Identificador) ,
    FOREIGN KEY (categorias_nombre) REFERENCES categorias(Identificador) ,
    PRIMARY KEY (Identificador)
    ) 
    ENGINE = InnoDB;
