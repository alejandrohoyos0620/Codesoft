<?php
class MapeadorPrendas extends MaperadorBase{
     public function __construct(){

     }

    public function mapeadorCODB ($datosCO){
       return false ;
    }
    public  function mapeadorDBCO ($datosDB){
        $dato=new Prendas($datosDB[0]->Id_Prenda,$datosDB[0]->TipoPrenda);
        return $dato;

    }  
    /**
     * adicionar el model
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){
     
       foreach($arrayDatosDB as $r){
        $prendas[] = new Prendas($r->Id_Prenda,$r->TipoPrenda);            
        }
      
        
        return $prendas;

    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>