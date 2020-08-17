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

    public function BuscarId($prenda,$db){
      $mapeador= new MapeadorPrendas();
      $db->select("*")->from("prendas")->where('TipoPrenda',trim($prenda));
      $resultado= $db->get()->result();
      return $mapeador->mapeadorDBCO($resultado); 

  }
  public function BuscarPrenda($id,$db){
    $mapeador= new MapeadorPrendas();
      $db->select("*")->from("prendas")->where('Id_Prenda',$id);
      $resultado= $db->get()->result();
      return $mapeador->mapeadorDBCO($resultado); 
  }
}
?>
