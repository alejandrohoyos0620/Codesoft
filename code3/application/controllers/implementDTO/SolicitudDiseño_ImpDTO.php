<?php
//require_one("../contratosDTO/ImagenClienteContratoDTO.php");
//require_one("../DTO/ImagenClienteDTO.php");
require 'application\controllers\mapeadoresDTO\MapeadorSolicitudDiseñoDTO.php';
//require_one("../../models/contrato/ImagenClienteContrato.php");
//require 'application\controllers\contratosDTO\IImagenClienteContratoDTO.php';

class SolicitudDiseno_ImpDTO implements ISolicitudDisenoContratoDTO{

    private $app;

    public function __construct(ISolicitudDisenosContrato $valor){
        $this->app=$valor;
    }
	/*
	/Guardar instancia un mapeador y guarda en la base de datos
	/@param dato contiene la informacion para el mapeador 
	/@param db contiene la informacion de la base de datos
	/ return La respuesta de la base de datos
	*/
    public function Guardar(SolicitudDisenoDTO $dato,$db){
        $mapeadorDTO= new MapeadorSolicitudDisenoDTO();
        $mapeador= $mapeadorDTO->mapeadorCODB($dato);
        $resultado=$this->app->Guardar($mapeador,$db);
        return $resultado;

    }
   

}