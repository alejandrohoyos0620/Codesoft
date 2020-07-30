<?php
require 'application\models\mapeadores\MapeadorPrendas.php';
class Prenda_Imp implements IPrendasContrato {

    public function __construct(){                  
    }

  public function ListarPrendas($db){       
       
    $mapeador= new MapeadorPrendas();
    $query=$db->get('prendas')->result();     
    return $mapeador->mapeadorArrayDBCO($query);
    
    }

}
?>
