<?php
include "conexion.php";

$url = "select url from imagen_cliente";
$resultado = $conexion -> query($url);


while ($fila = $resultado->fetch_assoc()) {

    $productoConsulta[] = array_map('utf8_encode',$fila); 
}

echo json_encode($productoConsulta);
$conexion -> close();


?>