<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar extends CI_Controller {
  public $dep;

   /**NO BORRAR POR AHORA,GRACIAS */
    /*public function __construct(){
        parent:: __construct();
        $container = new \DI\ContainerBuilder();
        $container-> useAutowiring(false);
        $container-> useAnnotations(false);
        $container->addDefinitions(require 'application\controllers\dependencia.php');
        $this->dep= $container->build();   
        //var_dump($valor->get('ImagenCLiente_ImpDTO'));
       // $this->dep= $valor->get('ImagenCLiente_ImpDTO');          
     } */

     public function __construct(){
         parent::__construct();
        $this->app2=new ImagenCliente_Imp();    
        $app= new ImagenCliente_ImpDTO($this->app2);
        $this->dep=$app;
   
    }
	
	public function index()
	{
        $this->load->view('VistaImagen/header');
        $this->load->view('VistaImagen/body');
        if(isset($_POST['submit'])){
        $imageName=$_POST['imagename'];
        $userType="cliente";
        $urlImagen=cargarImagen($userType,$imageName); 
        $datos= new ImagenClienteDTO($urlImagen,$imageName,1);
        $this->dep->Guardar($datos,$this->db);  
        }
    }
   

}




?>
