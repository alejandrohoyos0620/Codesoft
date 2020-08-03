<?php
/*
	/uploadImage Crea un archivo image para los estampados
	/@param userType especifica que tipo de usuario subio el archivo 
	/@param fileName especifica el nombre del archivo image para los estampados
	/ return devuelve el nombre del archivo file concatenado a un numero random entre 0 y 999

*/

function uploadImageMovil($userType,$fileName, $imagenBit) {
        $file= $fileName.rand(0,999);   
        file_put_contents("imagenes/cliente/".$file.".jpg", base64_decode($imagenBit));
        return $file;
    }
    ?>