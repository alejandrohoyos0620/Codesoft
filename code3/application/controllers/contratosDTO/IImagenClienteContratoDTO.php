<?php
//require 'application\controllers\DTO\ImagenClienteDTO.php';
 interface IImagenClienteContratoDTO{
      
    public function Guardar(ImagenClienteDTO $dato,$db);
    public function BuscarId($idCliente,$url,$db);
    public function Eliminar($id);
    public function Actualizar(ImagenClienteDTO $dato);
    public function ListarImagenes();

 }



?>