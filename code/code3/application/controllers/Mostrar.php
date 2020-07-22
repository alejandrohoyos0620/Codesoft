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
/*
	/index Carga 2 vistas header y body, Valida una peticion post y 
	Crea una nueva ImagenClienteDTO y lo guarda en la base de datos
*/
 
/*
	/pruebaImageNombre Lanza una prueba unitaria que prueba que sea un string el nombre de la imagen
	/@param $datos trae el nombre de la imagen
	
*/
 public function pruebaImageNombre ($datos){
		$pruebas  = $datos;
		$resultado = 'is_string';
		$nombre = 'Nombre imagen String';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre.'prueba que sea un string el nombre de la imagen');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }
  
/*
	/pruebaCarga Lanza una prueba unitaria que prueba que la url no esta vacia, es decir se puede cargar
	/@param $datos trae url de la imagen
	
*/
  public function pruebaCarga ($datos){
		$pruebas  = $datos;
		$resultado = 'is_null';
		$nombre = 'url de la imagen no es vacio';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'prueba que la url no esta vacia, es decir se puede cargar');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }
  
/*
	/pruebaImageNombre Lanza una prueba unitaria que Prueba que la extencion de la imagen sea JGP
	/@param $datos trae la extencion de la imagen
	
*/
   public function pruebaExtJGP ($datos){
		$pruebas  = $datos;
		$resultado = 'JGP';
		$nombre = 'la extencion es jgp';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'Prueba que la extencion de la imagen sea JGP');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }

  
/*
	/pruebaImageNombre Lanza una prueba unitaria que Prueba que la extencion de la imagen sea JEGP
	/@param $datos trae le xtencion de la imagen
	
*/
    public function pruebaExtJEGP ($datos){
		$pruebas  = $datos;
		$resultado = 'JEGP';
		$nombre = 'la extencion es jegp';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'Prueba que la extencion de la imagen sea JEGP');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }

/*
	/pruebaImageNombre Lanza una prueba unitaria que Prueba que la extencion de la imagen sea JEGP
	/@param $datos trae le extencion de la imagen
	
*/
     public function pruebaExtPNG ($datos){
		$pruebas  = $datos;
		$resultado = 'PNG';
		$nombre = 'la extencion es png';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'Prueba que la extencion de la imagen sea PNG');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }

	public function index()
	{
		$this->load->library('unit_test');
		$this->load->view('VistaImagen/header');
        $this->load->view('VistaImagen/body');
		if(isset($_POST['submit'])){
        $imageName=$_POST['imagename'];
        $userType="cliente";
        $urlImagen=uploadImage($userType,$imageName); 
        $datos= new ImagenClienteDTO($urlImagen,$imageName,1);
		var_dump("Holi ->" .$urlImagen);
		$this->pruebaExtJGP($urlImagen);
		$this->dep->Guardar($datos,$this->db);  
		
		
        }

		
    }
   

}




?>
