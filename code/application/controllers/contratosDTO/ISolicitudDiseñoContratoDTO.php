<?php
 interface ISolicitudDisenoContratoDTO{
      
    public function Guardar(SolicitudDisenoDTO $dato,$db);
    public function ListarSolicitudes($db);
    public function ListarSolicitudesCategoria($id, $db);
    
 }



?>