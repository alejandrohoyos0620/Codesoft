<?php
require 'application\models\mapeadores\MapeadorRegistroComprador.php';

class RegistroComprador_Imp implements IRegistroCompradorContrato {

    public function __construct(){  
                
    }
/*
	/Guardar instancia un mapeador y guarda en la base de datos
	/@param dato contiene la informacion para el mapeador 
	/@param db contiene la informacion de la base de datos
	/return La respuesta de la base de datos
*/
    public function GuardarRegistro(RegistroComprador $dato,$db){  
        $mapeador= new MapeadorRegistroComprador();
        $valor=$mapeador->mapeadorCODB($dato);  
        return $db->insert('registrarcomprador', $valor);

    }
    

}
?>
