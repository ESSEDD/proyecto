<?php 
    session_start();
    include "log.php";
    include "config.php";
    include "inc/funciones.php";
    if(isset($_GET['accion'])){
        switch($_GET['accion']){
            case "insertar":
                    insertarRegistro($conexion);
                break;
        }
    }
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Panel de Control</title>
        <link rel="stylesheet" href="css/panel.css">
    </head>
    <body>
        <?php comprobarAcceso(); ?>
    <header>
        <h1>Panel de Control</h1>
    </header>
    <main>
        <nav>
        <ul>
        <?php menunavegacion($conexion); ?>
        </ul>
    </nav>
        <section>
            <a href="?operacion=nuevo&tabla=<?php echo $_GET['tabla'] ?>" class="botonnuevo">+</a>
            <h3>Editando la tabla: <?php echo $_GET['tabla'] ?></h3>
            <div id="contenedor">
                <?php
                    if(!isset($_GET['operacion'])){
                ?>
                    <table>
                        <thead>
                            <tr>
                                <?php mostrarcolumnas($conexion); ?>
                            </tr>
                        </thead>
                        <tbody>
                                <?php mostrardatos($conexion); ?>
                        </tbody>
                    </table>
                <?php
                    }else{
                        switch($_GET['operacion']){
                            case "nuevo":
                                formularioInsertar($conexion);
                                break;
                        }
                    }
                ?>
            </div>
        </section>
    </main>
    </body>

</html>