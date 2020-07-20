<?php 
return  [
    /*'Mostrar'=> function(Psr\Container\ContainerInterface $q){
        new Mostrar( $q->get('ImagenCliente_Imp'));
    },*/

   'ImagenCLiente_ImpDTO'=> function(){
        new ImagenCliente_ImpDTO( new ImagenCliente_Imp());
    },

    
        
];
    ?>