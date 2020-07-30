<?php
require 'application\models\mapeadores\MapeadorSolicitudDiseños.php';

class SolicitudDiseno_Imp implements ISolicitudDisenosContrato {

    public function __construct(){  
                
    }
/*
	/Guardar instancia un mapeador y guarda en la base de datos
	/@param dato contiene la informacion para el mapeador 
	/@param db contiene la informacion de la base de datos
	/return La respuesta de la base de datos
*/
    public function Guardar(SolicitudDiseno $dato,$db){  
        $mapeador= new MapeadorSolicitudDisenos();
        $valor=$mapeador->mapeadorCODB($dato);  
        return $db->insert('solicituddiseño', $valor);

    }
    

}
?>
