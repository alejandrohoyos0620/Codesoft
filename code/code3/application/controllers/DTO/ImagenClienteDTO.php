<?php 
class ImagenClienteDTO {

 private $id;
 private $urlImagen;
 private $nombreImagen;
 private $idCliente;
 public function __construct( $url,$nombre,$cliente){

    $this->urlImagen= $url;
    $this->nombreImagen=$nombre;
    $this->idCliente=$cliente;     
 }

 public function getID(){
     return $this->id;
 }
 public function getUrlImagen(){
     return $this->urlImagen;
 }
  public function getNombreImagen(){
      return $this->nombreImagen;
  }
  public function getIdCliente(){
      return $this->idCliente;
  }
  public function setId($id){
      $this->id=$id;
  }
  public function setUrlImagen($urlimagne){
      $this->urlImagen=$urlimagne;
  }
  public function setNombreImagen($nombre){
      $this->nombreImagen=$nombre;
  }
  public function setIdCliente($idcliente){
      $this->idCliente=$idcliente;
  }
  function __destruct() {
    
}
 

}