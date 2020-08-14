<?php

 interface IImagenClienteContrato{
      
    public function Guardar(ImagenCliente_model $dato,$db);
    public function BuscarId($idCliente,$url,$db);
    public function Eliminar($id);
    public function Actualizar(ImagenCliente_model $dato);
    public function ListarImagenes();

 }



?>