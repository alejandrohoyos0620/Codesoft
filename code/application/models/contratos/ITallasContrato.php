<?php

 interface ITallasContrato{
    public function ListarTallas($db);
    public function BuscarId($talla,$db);
    public function BuscarTalla($id,$db);
 }



?>