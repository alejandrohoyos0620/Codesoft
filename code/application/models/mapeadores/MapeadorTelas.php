<?php
class MapeadorTelas extends MaperadorBase{
     public function __construct(){

     }

    public function mapeadorCODB ($datosCO){
       return false ;
    }
    public  function mapeadorDBCO ($datosDB){
        $dato=$datosDB[0]->Id_tela;
        return $dato;

    }  
    /**
     * adicionar el model
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){
     
       foreach($arrayDatosDB as $r){
        $telas[] = new Telas($r->Id_tela,$r->Nombre);            
        }
      
        
        return $telas;

    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>