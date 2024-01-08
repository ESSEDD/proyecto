<?php include "log.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main>
        <?php
    include "config.php";

    echo "Usuario: ".$_POST['usuario'];
    echo "<br>";
    echo "Contraseña: ".$_POST['contrasena'];

    $peticion = "
    SELECT * FROM administradores WHERE usuario = '".$_POST['usuario']."' AND contrasena = '".$_POST['contrasena']."';";

    $resultado = mysqli_query($conexion, $peticion);
    if($fila = mysqli_fetch_assoc($resultado)){
        echo "<div class='correcto'>V</div>
        <p>Usuario correcto. Registrando el acceso al sistema. Redirigiendo en 5 segundos...</p>";
        echo '<meta http-equiv="refresh" content="5;url=paneldecontrol.php">';
    }else{
        echo "<div class='incorrecto'>X</div>
            <p>Usuario incorrecto. Registrando acceso incorrecto. Redirigiendo en 5 segundos...</p>";
            echo '<meta http-equiv="refresh" content="5;url=index.php">';
    }
        ?>

    </main>
</body>

</html>