<?php
//require 'application\models\modelos\ImagenCliente_model.php';
//require_once("../DTO/ImagenClienteDTO.php");
class MapeadorSolicitudDisenoDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        $data= new SolicitudDiseno($datosCO->getIdPrenda(),
        $datosCO->getIdTalla(),$datosCO->getColor(),
        $datosCO->getIdTela(),$datosCO->getDescripcion(),
        $datosCO->getIdImagen());
        return $data;

    }
    public  function mapeadorDBCO ($datosDB){
        
        $data= new SolicitudDisenoDTO($datosCO->getIdPrenda(),
        $datosCO->getIdTalla(),$datosCO->getColor(),
        $datosCO->getIdTela(),$datosCO->getDescripcion(),
        $datosCO->getIdImagen());
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