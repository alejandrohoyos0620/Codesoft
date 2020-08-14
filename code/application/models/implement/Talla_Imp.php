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
  public function BuscarId($talla,$db){
      $mapeador= new MapeadorTallas();
      $db->select("Id_Talla")->from("tallas")->where('Nombre',trim($talla));
      $resultado= $db->get()->result();
      return $mapeador->mapeadorDBCO($resultado); 

  }
}
?>
