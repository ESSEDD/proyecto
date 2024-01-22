<?php 
    session_start();
    include "log.php";
    include "config.php";
    include "inc/funciones.php";
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
                                echo "<h4>Nuevo elemento para la tabla:".$_GET['tabla']."</h4>";
                                echo "<form action='?accion=insertar&tabla=".$_GET['tabla']."'method='POST'>";
                                $peticion = "SHOW COLUMNS FROM ".$_GET['tabla'].";";
                                $resultado = mysqli_query($conexion, $peticion);
                                while($fila = mysqli_fetch_assoc($resultado)){
                                    echo "
                                    <input type='text' name='".$fila['Field']."'placeholder='".$fila['Field']."'>

                                    ";
                                }
                                echo "<input type='submit'>";
                                echo "</form>";
                        }
                    }
                ?>
            </div>
        </section>
    </main>
    </body>

</html>