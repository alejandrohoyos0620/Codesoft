<?php
//require 'application\controllers\DTO\ImagenClienteDTO.php';
 interface IImagenClienteContratoDTO{
      
    public function Guardar(ImagenClienteDTO $dato,$db);
    public function BuscarImagen($id);
    public function Eliminar($id);
    public function Actualizar(ImagenClienteDTO $dato);
    public function ListarImagenes();

 }



?>