<?php
require 'application\models\mapeadores\MapeadorImageCliente.php';

class ImagenCliente_Imp implements IImagenClienteContrato {

    public function __construct(){  
                
    }
 
    public function Guardar(ImagenCliente_model $dato,$db){  
        $mapeador= new MapeadorImageCliente();
        $valor=$mapeador->mapeadorCODB($dato);  
        return $db->insert('imagen_cliente', $valor);

    }
    public function BuscarImagen($id){
       return false;

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