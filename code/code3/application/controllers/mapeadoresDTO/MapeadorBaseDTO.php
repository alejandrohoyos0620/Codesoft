<?php

abstract class  MapeadorBaseDTO {

    public abstract function mapeadorDBCO ($datosDB);
    public abstract function mapeadorCODB ($datosCO);    
    public abstract function mapeadorArrayDBCO ($arrayDatosDB);
    public abstract function mapeadorArraryCODB ($ArrayDatosCO);

}

?>