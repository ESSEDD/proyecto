<?php
    include "config.php";

    echo "Usuario: ".$_POST['usuario'];
    echo "<br>"
    echo "Contraseña: ".$_POST['contrasena'];

    $peticion = "
    SELECT *
    FROM administradores
    WHERE
    usuario ='".$_POST ['usuario']"'
    AND
    contrasena ='".$_POST ['contrasena']"'
    ";

    $resultado = mysqli_query($conexion,$peticion);
    if($fila = mysqli_fetch_assoc($resultado)){
        echo "El resultado es correcto";
    }else{
        echo "El resultado no es correcto";
    }

    
?>