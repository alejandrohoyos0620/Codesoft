<?php
class MapeadorPrendasDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        return false;
    }
    public  function mapeadorDBCO ($datosDB){
             return false;

    }  
    /**
     *
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){        
        foreach($arrayDatosDB as $r){
            $PrendasDTO[] = new PrendasDTO($r->getIdPrenda(),$r->getTipo());
                //$tallas[]=array('idTalla' =>$r->Id_Talla , 
                                // 'nombre'=>$r->Nombre);
            }
        return $PrendasDTO;
    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>