<?php
    include "config.php";
    $peticion = "SELECT * FROM PREGUNTAS
                ORDER BY Identificador DESC
                LIMIT 20;";
    $resultado = mysqli_query($conexion,$peticion);

    while($fila = mysqli_fetch_assoc($resultado)){
        $datos[] = $fila;
    }

    $json = json_encode($datos);
    echo $json;
?>