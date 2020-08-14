<?php
class MapeadorSolicitudDisenos extends MaperadorBase{
     public function __construct(){

     }

    public function mapeadorCODB ($datosCO){
        return $datosCO->toString();
          
    }
    public  function mapeadorDBCO ($datosDB){
         return false;

    }  
    public  function mapeadorArrayDBCO ($arrayDatosDB){
        return false;

    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>