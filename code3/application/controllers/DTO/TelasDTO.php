<?php 
 class TelasDTO{
 private $idTela;
 private $nombre;
 public function __construct($id,$nombre){
     $this->idTela= $id;
     $this->nombre= $nombre;

}
 public function getIdTela(){
     return $this->idTela;
 }

public function getNombre(){
     return $this->nombre;
 }
 
 }

?>