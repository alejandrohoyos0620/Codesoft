<?php 
 class Tallas{
 private $idTalla;
 private $nombre;
 public function __construct($id,$nombre){
     $this->idTalla= $id;
     $this->nombre= $nombre;

}
 public function getIdTalla(){
     return $this->idTalla;
 }

public function getNombre(){
     return $this->nombre;
 }
 public function toString():array{
    return[
        'Id_Talla'=>$this->idTalla,
        'Nombre'=>$this->nombre
    ];
}
 
 

 }




?>