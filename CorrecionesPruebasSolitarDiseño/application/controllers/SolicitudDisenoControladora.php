<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SolicitudDisenoControladora extends CI_Controller {
  public $dep;
  public $tallas;
  public $prendas;
  public $telas;
  public $solicitud;

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
     //-------inyecciónImagenCliente---------------//
        $this->app2=new ImagenCliente_Imp();    
        $app= new ImagenCliente_ImpDTO($this->app2);
        $this->dep=$app;
        //----------inyeccionTallas--------------//
        $this->appTalla=new Talla_Imp();    
        $appTalla2= new Talla_ImpDTO($this->appTalla);
        $this->tallas=$appTalla2;
        //----------inyeccionPrendas-------------//
        $this->appPrenda=new Prenda_Imp();    
        $appPrenda2= new Prenda_ImpDTO($this->appPrenda);
        $this->prendas=$appPrenda2;
        //----------inyeccionTelas-------------//
        $this->appTela=new Tela_Imp();    
        $appTela2= new Tela_ImpDTO($this->appTela);
        $this->telas=$appTela2;
        //----------inyeccionTelas-------------//
        $this->appSolicitudD=new SolicitudDiseno_Imp();    
        $appSolicitudD2= new SolicitudDiseno_ImpDTO($this->appSolicitudD);
        $this->solicitud=$appSolicitudD2; 
  
   
   
    }
/*
    /index Carga 2 vistas header y vistaSolicitudDiseño a la cual le enviamos las los dato las tallas,
    prendas,tipo de tela, Valida una peticion post y crea una nueva ImagenClienteDTO y SolicitudDiseñoDTO 
    y lo guarda en la base de datos.
*/


	public function index()
	{   
        $resultadoTallas = $this->traerTallas();
        $resultadoPrendas= $this->traerPrendas();
        $resultadoTelas= $this->traerTelas();      
		$this->load->view('header');
        $this->load->view('vistasolicitardiseno', compact("resultadoTallas","resultadoPrendas","resultadoTelas"));              
		if(isset($_POST['submit'])){        
        $userType="cliente";
        $idCliente=1;        
        $urlImagen=uploadImage($userType,$_POST['imagename']);         
        $datos= new ImagenClienteDTO($urlImagen,$_POST['imagename'],$idCliente);        
        $this->dep->Guardar($datos,$this->db); 
        $resultadoImagen= $this->traerIdImagen($idCliente,$urlImagen);
        $crearSolicitud= new SolicitudDisenoDTO($_POST['prenda'],
        $_POST['talla'],$_POST['color'],$_POST['tela'],$_POST['descripcion'],$resultadoImagen);
        $this->solicitud->Guardar($crearSolicitud,$this->db);
		 }

		
    }
    /**
     * traerTallas, se encarga de traer un array con las tallas de ropa.
     */
    public function traerTallas(){
       $listaTallas= $this->tallas->ListarTallas($this->db);
       return  $listaTallas;

    }
    /**
     * traerPrendas, se encarga de traer un array con los tipos de prendas.
     */
    public function traerPrendas(){
        $listaPrendas= $this->prendas->ListarPrendas($this->db);
        return  $listaPrendas;
 
     }
      /**
     * traerTelas, se encarga de traer un array con los tipos de tela.
     */
     public function traerTelas(){
        $listaTelas= $this->telas->ListarTelas($this->db);
        return  $listaTelas;
 
     }
      /**
     * traerIdImagen, se encarga buscar el id de  la imagen que esta siendo cargada en la base de
     * datos para ser asociada  a la solicitud del diseño.
     * $id=id del cliente.
     * $url=segundo identificados unico de la imagen.
     */
     public function traerIdImagen($id,$url){        
        $resultadoId= $this->dep->BuscarID($id,$url,$this->db);
        return  $resultadoId;
 
     }
    
   

}
?>
