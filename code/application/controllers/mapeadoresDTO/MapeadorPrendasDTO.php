<?php
class MapeadorPrendasDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        return false;
    }
    public  function mapeadorDBCO ($datosDB){
        $data= new PrendasDTO( $datosDB->getIdPrenda(),$datosDB->getTipo());
        return $data;

    }  
    /**
     *
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){        
        foreach($arrayDatosDB as $r){
            $PrendasDTO[] = new PrendasDTO($r->getIdPrenda(),$r->getTipo());
                
            }
        return $PrendasDTO;
    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>