<?php
 interface IPrendasContratoDTO{
    public function ListarPrendas($db);
    public function BuscarId($prenda,$db);
    public function BuscarPrenda($id,$db);
 }



?>