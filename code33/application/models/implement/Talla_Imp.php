<?php
require 'application\models\mapeadores\MapeadorTallas.php';
class Talla_Imp implements ITallasContrato {

    public function __construct(){                  
    }

  public function ListarTallas($db){       
       
    $mapeador= new MapeadorTallas();
    $query=$db->get('tallas')->result();     
    $resultado=$mapeador->mapeadorArrayDBCO($query);
    return $resultado;
    }

}
?>
