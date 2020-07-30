<?php 
 class PrendasDTO{
 private $idPrenda;
 private $tipo;
 public function __construct($id,$tipo){
     $this->idPrenda= $id;
     $this->tipo= $tipo;

}
 public function getIdPrenda(){
     return $this->idPrenda;
 }

public function getTipo(){
     return $this->tipo;
 }
 
 

 }




?>