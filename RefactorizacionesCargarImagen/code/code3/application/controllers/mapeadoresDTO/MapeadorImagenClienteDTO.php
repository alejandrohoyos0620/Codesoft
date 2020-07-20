<?php
require 'application\controllers\mapeadoresDTO\MapeadorBaseDTO.php';
//require 'application\models\modelos\ImagenCliente_model.php';
//require_once("../DTO/ImagenClienteDTO.php");
class MapeadorImageClienteDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        $data= new ImagenCliente_model($datosCO->getUrlImagen(),$datosCO->getNombreImagen(),
        $datosCO->getIdCliente());
        return $data;

    }
    public  function mapeadorDBCO ($datosDB){

        $data= new ImagenClienteDTO( $datosDB->getUrlImagen(),$datosDB->getNombreImagen(),
        $datosDB->getIdCliente());
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