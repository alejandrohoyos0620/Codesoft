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
        if(isset($arrayDatosDB[0])){
        foreach($arrayDatosDB as $r){
         $solicituddiseno[] = new SolicitudDiseno($r->Id_solicitudDiseño, $r->Id_Prenda,
         $r->Id_Talla,$r->Color,$r->Id_tela,$r->DescripcionDiseño,$r->Id_imagen);            
         }
         return $solicituddiseno;
        }
        else{
            return null;
        }
     }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;
    }

}
?>