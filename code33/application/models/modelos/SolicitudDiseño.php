<?php 
class SolicitudDiseno{
private $idSolicitudDiseno;
private $idPrenda;
private $idTalla;
private $color;
private $idTela;
private $descripcion;
private $idImagen;
 public function __construct($idprenda,$idtalla,$color,$idtela,$descripcion,$idimagen){
     
     $this->idPrenda=$idprenda;
     $this->idTalla=$idtalla;
     $this->color=$color;
     $this->idTela=$idtela;
     $this->descripcion=$descripcion;
     $this->idImagen=$idimagen;
 }
 public function getIdSolicitudDiseno(){
     return $this->idSolicitudDiseno;
 }
 public function getIdPrenda(){
     return $this->idPrenda;
 }
 public function getIdTalla(){
     return $this->idTalla;
 }
 public function getColor(){
     return $this->color;
 }
 public function getIdTela(){
     return $this->idTela;
 }
 public function getDescripcion(){
     return $this->descripcion;
 }
 public function getIdImagen(){
     return $this->idImagen;
 }

 public function toString():array{
    return[
        'Id_solicitudDiseño'=>$this->idSolicitudDiseno,
        'Id_Prenda'=>$this->idPrenda,
        'Id_talla'=>$this->idTalla,
        'color'=>$this->color,
        'Id_tela'=>$this->idTela,
        'DescripcionDiseño'=>$this->descripcion,
        'Id_imagen'=>$this->idImagen
    ];
}


}



?>