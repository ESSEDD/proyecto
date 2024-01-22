<?php

    include "config.php";
    $peticion = "SELECT * FROM usuarios WHERE usuario = '".$_GET['usuario']."' AND contrasena = '".$_GET['contrasena']."';
    ";
    $resultado = mysqli_query($conexion,$peticion);

    if($fila = mysqli_fetch_assoc($resultado)){
        echo '{"llave":"si"}';
    }else{
        echo '{"llave":"no"}';
    }
?>