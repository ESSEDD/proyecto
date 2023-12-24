CREATE TABLE votos (
    Identificador INT(10) NOT NULL AUTO_INCREMENT , 
    usuarios_usuario INT(10) NOT NULL ,  
    respuestas_texto INT(10) NOT NULL , 
    valor INT(10) NOT NULL , 
    fecha DATE NOT NULL , 
    FOREIGN KEY (usuarios_usuario) REFERENCES usuarios(Identificador) ,
    FOREIGN KEY (respuestas_texto) REFERENCES respuestas(Identificador) ,
    PRIMARY KEY (Identificador)
    ) 
    ENGINE = InnoDB;
