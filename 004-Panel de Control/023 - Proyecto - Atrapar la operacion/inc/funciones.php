<?php

function comprobarAcceso() {
    if(!isset($_SESSION['usuario'])){
        die("<aside><div class='incorrecto'>X</div>Intento incorrecto</aside>");
    }
}

function menunavegacion($conexion) {
    $peticion = "SHOW TABLES;";
        
    $resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_assoc($resultado)){
        echo "
        <li>
            <a href='?tabla=".$fila['Tables_in_proyecto']."'>
        ".$fila['Tables_in_proyecto']."
        </a>
        </li>
        ";
    }
}
function mostrarcolumnas($conexion) {
    $peticion = "SHOW COLUMNS FROM ".$_GET['tabla'].";";
    $resultado = mysqli_query($conexion, $peticion);
    while($fila = mysqli_fetch_assoc($resultado)){
        echo "
        <th>
            ".$fila['Field']."
        </th>
        ";
    }
}

function mostrardatos($conexion) {
    $peticion = "SELECT * FROM ".$_GET['tabla'].";";
                        $resultado = mysqli_query($conexion, $peticion);
                        while($fila = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            foreach($fila as $campo){
                                echo "
                                <td>
                                    ".$campo."
                                </td>
                                ";
                            }
                            echo "</tr>";
                        }
}
?>

