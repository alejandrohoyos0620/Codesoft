<?php

require 'application\controllers\mapeadoresDTO\MapeadorImagenClienteDTO.php';

class ImagenCliente_ImpDTO implements IImagenClienteContratoDTO{

    private $app;

    public function __construct(IImagenClienteContrato $valor){
        $this->app=$valor;
    }
	/*
	/Guardar instancia un mapeador y guarda en la base de datos
	/@param dato contiene la informacion para el mapeador 
	/@param db contiene la informacion de la base de datos
	/ return La respuesta de la base de datos
	*/
    public function Guardar(ImagenClienteDTO $dato,$db){
        $mapeadorDTO= new MapeadorImageClienteDTO();
        $mapeador= $mapeadorDTO->mapeadorCODB($dato);
        return $this->app->Guardar($mapeador,$db);
        

    }
    public function BuscarId($idCliente,$url,$db){
        return $this->app->BuscarId($idCliente,$url,$db);
    
    }
    public function BuscarURL($idCliente,$ID,$db){
        return $this->app->BuscarURL($idCliente,$ID,$db);
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

