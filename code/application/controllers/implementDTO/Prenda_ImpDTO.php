<?php
require 'application\controllers\mapeadoresDTO\MapeadorPrendasDTO.php';
require 'application\controllers\contratosDTO\IPrendasContratoDTO.php';
class Prenda_ImpDTO implements IPrendasContratoDTO{

    private $app;

    public function __construct(IPrendasContrato $valor){
        $this->app=$valor;
    }

    public function ListarPrendas($db){
    $Mapeador= new MapeadorPrendasDTO();
    $lista= $this->app->ListarPrendas($db);
    return $Mapeador->mapeadorArrayDBCO ($lista);
    
    }
    public function BuscarId($prenda,$db){
        return $this->app->BuscarId($prenda, $db);

    }
    public function BuscarPrenda($id,$db){
        return $this->app->BuscarPrenda($id, $db);
    }


}
