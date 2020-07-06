<?php
include "Conexion/conexion.php";
if (!isset($modulo)) {

    $modulo = "loggeo";
} else {
    $modulo = $modulo;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebaCargarImagen</title>
</head>
<body>
<div class="cuerpo">
        <?php
        if (file_exists("vistas/" . $modulo. ".php")) {
            include "vistas/" . $modulo . ".php";
        } else {
            echo "<i>no se encontro el modulo <br>" . $modulo . "</br> <a href= './'>Regresar</a></i>";
        }

        ?>
    </div>


    
</body>
</html>