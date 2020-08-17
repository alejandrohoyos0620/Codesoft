<?php

 interface ISolicitudDisenosContrato{
      
    public function Guardar(SolicitudDiseno $dato,$db);
    public function ListarSolicitudes($db);
    public function ListarSolicitudesCategoria($id, $db);
  
 }



?>