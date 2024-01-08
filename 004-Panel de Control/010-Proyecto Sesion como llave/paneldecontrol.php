<?php 
    session_start();
    include "log.php";
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Panel de Control</title>
        <link rel="stylesheet" href="css/panel.css">
    </head>
    <body>
        <?php
        if(!isset($_SESSION['usuario'])){
            die("<main><div class='incorrecto'>X</div>Intento incorrecto</main>");
        }
    ?>
    Panel de control
    </body>

</html>