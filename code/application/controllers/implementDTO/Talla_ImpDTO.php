<?php
require 'application\controllers\mapeadoresDTO\MapeadorTallasDTO.php';
require 'application\controllers\contratosDTO\ITallasContratoDTO.php';
class Talla_ImpDTO implements ITallasContratoDTO{

    private $app;

    public function __construct(ITallasContrato $valor){
        $this->app=$valor;
    }

    public function ListarTallas($db){
    $Mapeador= new MapeadorTallasDTO();
    $lista= $this->app->ListarTallas($db);
    return $Mapeador->mapeadorArrayDBCO ($lista);
    }
    public function BuscarId($talla,$db){
        return $this->app->BuscarId($talla, $db);

    }

}

