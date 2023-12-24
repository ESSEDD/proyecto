CREATE TABLE respuestas (
    Identificador INT(10) NOT NULL AUTO_INCREMENT , 
    usuarios_usuario INT(10) NOT NULL ,  
    preguntas_titulo INT(10) NOT NULL , 
    texto TEXT NOT NULL , 
    fecha DATE NOT NULL , 
    FOREIGN KEY (usuarios_usuario) REFERENCES usuarios(Identificador) ,
    FOREIGN KEY (preguntas_titulo) REFERENCES preguntas(Identificador) ,
    PRIMARY KEY (Identificador)
    ) 
    ENGINE = InnoDB;
