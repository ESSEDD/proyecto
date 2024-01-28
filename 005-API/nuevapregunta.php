<?php
    include "config.php";

    echo "estoy creando la pregunta"; 
    $peticion = "INSERT INTO preguntas (valores) VALUES(NULL,2,'".$_GET['titulo']."','".$_GET['bloquetexto']."','".$_GET['palabrasclave']."',1,'".date("Y-m-d")."')";
    mysqli_query($conexion, $peticion);
?>
