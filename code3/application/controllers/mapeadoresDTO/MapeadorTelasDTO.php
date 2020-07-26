<?php
class MapeadorTelasDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        return false;
    }
    public  function mapeadorDBCO ($datosDB){
             return false;

    }  
    /**
     * agregar el modeloDTO.
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){        
        foreach($arrayDatosDB as $r){
            $telasDTO[] = new TelasDTO($r->getIdTela(),$r->getNombre());
                
            }
        return $telasDTO;
    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>