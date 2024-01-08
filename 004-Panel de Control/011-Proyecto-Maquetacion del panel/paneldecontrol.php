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
            die("<aside><div class='incorrecto'>X</div>Intento incorrecto</aside>");
        }
    ?>
    <header>
        <h1>Panel de Control</h1>
    </header>
    <main>
        <nav>.</nav>
        <section>.</section>
    </main>
    </body>

</html>