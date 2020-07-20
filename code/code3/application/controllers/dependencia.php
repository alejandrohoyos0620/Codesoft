<?php 
return  [
    /*'Mostrar'=> function(Psr\Container\ContainerInterface $q){
        new Mostrar( $q->get('ImagenCliente_Imp'));
    },*/
/*
/ ImagenCLiente_ImpDTO Crea una nueva instancia de ImagenCliente_ImpDTO
/ return Devuelve una instancia nueva de ImagenCliente_Imp
*/

   'ImagenCLiente_ImpDTO'=> function(){
        new ImagenCliente_ImpDTO( new ImagenCliente_Imp());
    },

    
        
];
    ?>
