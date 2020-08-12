<?php
class MapeadorTallasDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        $data= new Tallas($datosCO->getIdTalla(),$datosCO->getNombre());
        return $data;
    }
    public  function mapeadorDBCO ($datosDB){
        $data= new TallasDTO( $datosDB->getIdTalla(),$datosDB->getNombre());
        return $data;


    }  
    /**
     * agregar el modeloDTO.
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){        
        foreach($arrayDatosDB as $r){
            $tallasDTO[] = new TallasDTO($r->getIdTalla(),$r->getNombre());
                
            }
        return $tallasDTO;
    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>
