<?php

abstract class  MaperadorBase {

    public abstract function mapeadorDBCO ($datosDB);
    public abstract function mapeadorCODB ($datosCO);    
    public abstract function mapeadorArrayDBCO ($arrayDatosDB);
    public abstract function mapeadorArraryCODB ($ArrayDatosCO);

}

?>