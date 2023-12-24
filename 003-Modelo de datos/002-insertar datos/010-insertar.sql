INSERT INTO `administradores` (
    `Identificador`, `usuario`, `contrasena`, `nombre`, `apellidos`, `email`, `imagen`) 
    VALUES (NULL, 'Sergio', 'sergio', 'sergio', 'diaz muñoz', 'sergio@hotmail.com', 'sergiodiaz.jpg');

INSERT INTO `usuarios` (
    `Identificador`, `usuario`, `contrasena`, `nombre`, `apellidos`, `email`, `imagen`) 
    VALUES (NULL, 'Sergio', 'sergio', 'sergio', 'diaz muñoz', 'sergio@hotmail.com', 'sergiodiaz.jpg');

INSERT INTO `categorias` (`Identificador`, `nombre`) VALUES (NULL, 'general')

INSERT INTO `preguntas` (`Identificador`, `usuarios_usuario`, `titulo`, `texto`, `palabrasclave`, `categorias_nombre`, `fecha`) 
VALUES (NULL, '3', 'una pregunta', 'texto de la primera pregunta', 'uno,dos,tres,cuatro', '1', '2023-12-24')

INSERT INTO `respuestas` (`Identificador`, `usuarios_usuario`, `preguntas_titulo`, `texto`, `fecha`) 
VALUES (NULL, '3', '2', 'esta es la primera respuesta', '2023-12-24')

INSERT INTO `votos` (`Identificador`, `usuarios_usuario`, `respuestas_texto`, `valor`, `fecha`) VALUES (NULL, '3', '1', '1', '2023-12-24')

INSERT INTO `categoriasblog` (`Identificador`, `nombre`) VALUES (NULL, 'general')

INSERT INTO `entradas` (`Identificador`, `administradores_usuario`, `titulo`, `texto`, `palabrasclave`, `categoriasblog_nombre`, `fecha`) VALUES (NULL, '1', 'primera entrada del blog', 'texto del blog', 'uno,dos,tres,cuatro', '1', '2023-12-24')

