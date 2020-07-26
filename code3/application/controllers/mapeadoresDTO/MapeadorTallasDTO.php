<?php
class MapeadorTallasDTO extends MapeadorBaseDTO {
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
            $tallasDTO[] = new TallasDTO($r->getIdTalla(),$r->getNombre());
                //$tallas[]=array('idTalla' =>$r->Id_Talla , 
                                // 'nombre'=>$r->Nombre);
            }
        return $tallasDTO;
    }
    public  function mapeadorArraryCODB ($ArrayDatosCO){
        return false;

    }

}
?>
