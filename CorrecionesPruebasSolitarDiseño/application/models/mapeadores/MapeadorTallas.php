<?php
class MapeadorTallas extends MaperadorBase{
     public function __construct(){

     }

    public function mapeadorCODB ($datosCO){
       return false ;
    }
    public  function mapeadorDBCO ($datosDB){
         return false;

    }  
    /**
     * adicionar el model
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){
     
       foreach($arrayDatosDB as $r){
        $tallas[] = new Tallas($r->Id_Talla,$r->Nombre);            
        }
      
        
        return $tallas;

    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>