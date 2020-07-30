<?php
require 'application\controllers\mapeadoresDTO\MapeadorTelasDTO.php';
require 'application\controllers\contratosDTO\ITelasContratoDTO.php';
class Tela_ImpDTO implements ITelasContratoDTO{

    private $app;

    public function __construct(ITelasContrato $valor){
        $this->app=$valor;
    }

    public function ListarTelas($db){
    $Mapeador= new MapeadorTelasDTO();
    $lista= $this->app->ListarTelas($db);
    return $Mapeador->mapeadorArrayDBCO ($lista);
    
    }

}

