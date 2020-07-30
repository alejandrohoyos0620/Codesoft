<?php
require 'application\models\mapeadores\MapeadorTelas.php';
class Tela_Imp implements ITelasContrato {

    public function __construct(){                  
    }

  public function ListarTelas($db){       
       
    $mapeador= new MapeadorTelas();
    $query=$db->get('telas')->result();     
    return $mapeador->mapeadorArrayDBCO($query);
    
    }

}
?>
