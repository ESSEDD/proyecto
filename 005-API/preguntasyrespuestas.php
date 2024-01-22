<?php

    include "config.php";
    $peticion = "SELECT * FROM PREGUNTAS WHERE Identificador = ".$_GET['id']." ;";
    $resultado = mysqli_query($conexion,$peticion);
    $datos = [];
    while($fila = mysqli_fetch_assoc($resultado)){
        $datos[] = $fila;
    }
    $contenido['pregunta'] = $datos;

    $peticion = "SELECT * FROM respuestas WHERE preguntas_titulo = ".$_GET['id']." ORDER BY Identificador DESC;";
    $resultado = mysqli_query($conexion,$peticion);
    $respuestas = [];
    while($fila = mysqli_fetch_assoc($resultado)){
        $respuestas[] = $fila;
    }
    $contenido['respuestas'] = $respuestas;

    $json = json_encode($contenido,JSON_PRETTY_PRINT);
    
    echo $json;
?>