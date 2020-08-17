<?php
class MapeadorImageCliente extends MaperadorBase{
     public function __construct(){

     }

    public function mapeadorCODB ($datosCO){
        return $datosCO->toString();  
    }
    public  function mapeadorDBCO ($datosDB){
        $dato[]=$datosDB[0]->ID;
        $dato[]=$datosDB[0]->URL;
         return $dato;

    }  
    public  function mapeadorArrayDBCO ($arrayDatosDB){
        return false;

    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>