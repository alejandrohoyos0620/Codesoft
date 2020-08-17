<?php

class MapeadorSolicitudDisenoDTO extends MapeadorBaseDTO {
    public function __construct(){
    }

    public function mapeadorCODB ($datosCO){  
        $data= new SolicitudDiseno(null,$datosCO->getIdPrenda(),
        $datosCO->getIdTalla(),$datosCO->getColor(),
        $datosCO->getIdTela(),$datosCO->getDescripcion(),
        $datosCO->getIdImagen());
        return $data;

    }
    public  function mapeadorDBCO ($datosDB){
        
        $data= new SolicitudDisenoDTO($datosDB->getIdPrenda(),
        $datosDB->getIdTalla(),$datosDB->getColor(),
        $datosDB->getIdTela(),$datosDB->getDescripcion(),
        $datosDB->getIdImagen());
        return $data;


    } 
    /**
     * agregar el modeloDTO.
     */
    public  function mapeadorArrayDBCO ($arrayDatosDB){      
        if(isset($arrayDatosDB[0])){
        foreach($arrayDatosDB as $r){
            $solicitudesDTO[] = new SolicitudDisenoDTO($r->getIdSolicitudDiseno(),$r->getIdPrenda(),
            $r->getIdTalla(),$r->getColor(),
            $r->getIdTela(),$r->getDescripcion(),
            $r->getIdImagen());
            }
            return $solicitudesDTO;
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