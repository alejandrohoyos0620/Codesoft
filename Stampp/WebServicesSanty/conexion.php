<?php
$hostname = 'localhost';
$database = 'stampp';
$username = 'root';
$password = '';

$conexion  = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "no se ha podido conectar";
}
?>