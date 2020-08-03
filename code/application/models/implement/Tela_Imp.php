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
    public function BuscarId($tela,$db){
      $mapeador= new MapeadorTelas();
      $db->select("Id_tela")->from("telas")->where('Nombre',trim($tela));
      $resultado= $db->get()->result();
      return $mapeador->mapeadorDBCO($resultado); 

  }

}
?>
