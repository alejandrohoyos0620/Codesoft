<?php

class MapeadorRegistroCompradorDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        $data= new RegistroComprador($datosCO->getNombreUsuario(),
        $datosCO->getNombre(),$datosCO->getApellidos(),
        $datosCO->getFechaNacimiento(),$datosCO->getEmail(),
        $datosCO->getContrasena(),$datosCO->getVerificarContrasena());
        return $data;

    }
    public  function mapeadorDBCO ($datosDB){
        
        $data= new RegistroCompradorDTO($datosDB->getNombreUsuario(),
        $datosDB->getNombre(),$datosDB->getApellidos(),
        $datosDB->getFechaNacimiento(),$datosDB->getEmail(),
        $datosDB->getContrasena(),$datosDB->getVerificarContrasena());
        return $data;


    }  
    public  function mapeadorArrayDBCO ($arrayDatosDB){
        return false;

    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>