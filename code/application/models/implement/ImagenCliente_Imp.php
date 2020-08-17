<?php
require 'application\models\mapeadores\MapeadorImageCliente.php';

class ImagenCliente_Imp implements IImagenClienteContrato {

    public function __construct(){  
                
    }
/*
	/Guardar instancia un mapeador y guarda en la base de datos
	/@param dato contiene la informacion para el mapeador 
	/@param db contiene la informacion de la base de datos
	/return La respuesta de la base de datos
*/
    public function Guardar(ImagenCliente_model $dato,$db){  
        $mapeador= new MapeadorImageCliente();
        $valor=$mapeador->mapeadorCODB($dato);  
        return $db->insert('imagen_cliente', $valor);

    }
    public function BuscarId($idCliente,$url,$db){
        $mapeador= new MapeadorImageCliente();
        $db->select("ID,URL")->from("imagen_cliente")->where('ID_Cliente',$idCliente)->where('URL',$url);
        $resultado= $db->get()->result();
        return $mapeador->mapeadorDBCO($resultado); 

    }
    public function BuscarURL($idCliente,$ID,$db){
        $mapeador= new MapeadorImageCliente();
        $db->select("ID, URL")->from("imagen_cliente")->where('ID_Cliente',$idCliente)->where('ID',$ID);
        $resultado= $db->get()->result();
        return $mapeador->mapeadorDBCO($resultado); 
    }
    public function Eliminar($id){

        return false;
    }
    public function Actualizar(ImagenCliente_model $dato){
        return false;

    }
    public function ListarImagenes(){
        return false;
    }

}
?>
