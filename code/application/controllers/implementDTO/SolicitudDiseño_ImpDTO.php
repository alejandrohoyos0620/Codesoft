<?php

require 'application\controllers\mapeadoresDTO\MapeadorSolicitudDiseñoDTO.php';


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
        return $this->app->Guardar($mapeador,$db);
    }
    public function ListarSolicitudes($db){
        $Mapeador= new MapeadorSolicitudDisenoDTO();
        $lista= $this->app->ListarSolicitudes($db);
        return $Mapeador->mapeadorArrayDBCO ($lista);
    }
    public function ListarSolicitudesCategoria($id, $db){
        $Mapeador= new MapeadorSolicitudDisenoDTO();
        $lista= $this->app->ListarSolicitudesCategoria($id, $db);
        return $Mapeador->mapeadorArrayDBCO ($lista);
    }
   

}