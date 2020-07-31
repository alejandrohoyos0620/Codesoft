<?php

require 'application\controllers\mapeadoresDTO\MapeadorRegistroCompradorDTO.php';


class RegistroComprador_ImpDTO implements IRegistroCompradorContratoDTO{

    private $app;

    public function __construct(IRegistroCompradorContrato $valor){
        $this->app=$valor;
    }
	/*
	/Guardar instancia un mapeador y guarda en la base de datos
	/@param dato contiene la informacion para el mapeador 
	/@param db contiene la informacion de la base de datos
	/ return La respuesta de la base de datos
	*/
    public function GuardarRegistro(RegistroCompradorDTO $dato,$db){
        $mapeadorDTO= new MapeadorRegistroCompradorDTO();
        $mapeador= $mapeadorDTO->mapeadorCODB($dato);
        return $this->app->GuardarRegistro($mapeador,$db);
        

    }
   

}