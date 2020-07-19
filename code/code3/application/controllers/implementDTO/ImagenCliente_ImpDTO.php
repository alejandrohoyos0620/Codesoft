<?php
//require_one("../contratosDTO/ImagenClienteContratoDTO.php");
//require_one("../DTO/ImagenClienteDTO.php");
require 'application\controllers\mapeadoresDTO\MapeadorImagenClienteDTO.php';
//require_one("../../models/contrato/ImagenClienteContrato.php");
//require 'application\controllers\contratosDTO\IImagenClienteContratoDTO.php';

class ImagenCliente_ImpDTO implements IImagenClienteContratoDTO{

    private $app;

    public function __construct(IImagenClienteContrato $valor){
        $this->app=$valor;
    }

    public function Guardar(ImagenClienteDTO $dato,$db){
        $mapeadorDTO= new MapeadorImageClienteDTO();
        $mapeador= $mapeadorDTO->mapeadorCODB($dato);
        $resultado=$this->app->Guardar($mapeador,$db);
        return $resultado;

    }
    public function BuscarImagen($id){
        return false;

    }
    public function Eliminar($id){

        return false;
    }
    public function Actualizar(ImagenClienteDTO $dato){
        return false;

    }
    public function ListarImagenes(){
        return false;
    }

}

