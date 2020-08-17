<?php
 interface ITallasContratoDTO{
    public function ListarTallas($db);
    public function BuscarId($talla,$db);
    public function BuscarTalla($id,$db);
 }



?>