<?php
 class Imagen{
    
    private $imagen="";
    private $nombreImage="";
    private $ruta="";

    
      public function __construct($FileImagen,$nombre){
        $this->imagen=$FileImagen;
        $this->nombreImage=$nombre;
        $this->ruta="Imagenes/".$nombre.".png";
        echo $this->ruta;
       
    }

    /**
     * subimos una imagen y la almacenamos es una la ruta "../imgenes/nombredelaimagen"
     * en caso de fallar mostramos un mensaje de error por medio de una exception.     * 
     */

    public function cargarImagen(){        

        if (is_uploaded_file($this->imagen)) {            
            move_uploaded_file($this->imagen,$this->ruta);
            //en caso te tener bases de datos , se adiciona el sql respectivo 
            //a la insercion de un elemento.
            
        }else{
            throw new Exception('No se a selecionado ninguna imagen.');
        }

    }   


}

    
    
    
    



