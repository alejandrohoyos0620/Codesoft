<?php
include "Modulo/imagen.php";
if (!isset($p)) {

    $p = "vistaImagen";
} else {
    $p = $p;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vistas/css/estilos_carga_imagen.css" rel="stylesheet">
    <title>pruebaCargarImagen</title>
</head>
<body>
<div class="cuerpo">
        <?php
        if (file_exists("vistas/" . $p . ".php")) {
            include "vistas/" . $p . ".php";
        } else {
            echo "<i>no se encontro el modulo <br>" . $p . "</br> <a href= './'>Regresar</a></i>";
        }

        ?>
    </div>


    
</body>
</html>