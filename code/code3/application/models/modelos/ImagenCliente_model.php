<?php 

class ImagenCliente_model  {

 private $id;
 private $urlImagen;
 private $nombreImagen;
 private $idCliente;
 public function __construct( $url,$nombre,$cliente){
    $this->urlImagen= $url;
    $this->nombreImagen=$nombre;
    $this->idCliente=$cliente;     
 }

 public function getId(){
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
  public function toString():array{
      return[
          'ID'=>$this->id,
          'Nombre'=>$this->nombreImagen,
          'Url'=>$this->urlImagen,
          'ID_Cliente'=>$this->idCliente
      ];
  }

}
?>