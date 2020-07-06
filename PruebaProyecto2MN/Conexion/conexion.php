<?php
@session_start();
@extract($_REQUEST);

/**
 * inicializamos los valores para la conexion con la base de datos de manera simple
 * y retornamos la conexion 
 */
function conectar(){
$mysql_host="localhost";
$mysql_userName="root";
$mysql_password="";
$mysql_db="sw3";
$mysql_puerto=3307;
return new mysqli($mysql_host, $mysql_userName, $mysql_password, $mysql_db, $mysql_puerto);
}
?>


