<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PruebasSolicitudDiseno extends CI_Controller {
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
    public function pruebaTallas ($datos){
		$pruebas  = $datos;
		$resultado = 'is_numeric';
		$nombre = 'ID de la talla correcto';
		$dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que  el formulario devuelve el identificador de la talla,para poder adicionar a la base de datos.');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
		$this->load->view('pruebas',$dato);
		
 }
 public function pruebaTipoTela ($datos){
    $pruebas  = $datos;
    $resultado = 'is_numeric';
    $nombre = 'ID de del tipo de tela correcto';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que  el formulario devuelve el identificador del tipo de tela,para poder adicionar a la base de datos.');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaPrenda ($datos){
    $pruebas  = $datos;
    $resultado = 'is_numeric';
    $nombre = 'ID de la prenda correcto';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que  el formulario devuelve el identificador del la prenda,para poder adicionar a la base de datos.');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaColor ($datos){
    $pruebas  = $datos;
    $resultado = 'is_string';
    $nombre = 'Valor en hexadecimal del un color';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que  el formulario devuelve el valor en hexadecinal de un color el cual es pasado a string
    ,para poder adicionar a la base de datos.');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaImageNombre ($datos){
    $pruebas  = $datos;
    $resultado = 'is_string';
    $nombre = 'Nombre imagen String:';
    $dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre.'prueba que sea un string el nombre de la imagen');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaDescripcion ($datos){
    $pruebas  = $datos;
    $resultado = 'is_string';
    $nombre = 'Descripcion solicitud';
    $dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre.'prueba que sea un strng en la descripción');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}

public function pruebaCarga ($datos){
    $pruebas  = $datos!= NULL;
    $resultado = 'is_true';
    $nombre = 'url de la imagen no es vacio';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que la url no esta vacia, es decir se puede cargar');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaTraerTallas ($datos){
    $pruebas  = $datos!= NULL;
    $resultado = 'is_true';
    $nombre = 'Consulta a la tabla tallas';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que la consulta a la tabla tallas no esta vacia');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaTraerTelas ($datos){
    $pruebas  = $datos!= NULL;
    $resultado = 'is_true';
    $nombre = 'Consulta a la tabla telas';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que la consulta a la tabla telas no esta vacia');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaTraerPrendas ($datos){
    $pruebas  = $datos!= NULL;
    $resultado = 'is_true';
    $nombre = 'Consulta a la tabla prendas';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que la consulta a la tabla prendas no esta vacia');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
}
public function pruebaTraerIdImagen ($datos){
    $pruebas  = $datos!= NULL;
    $resultado = 'is_true';
    $nombre = 'Consulta a la tabla Imagen_Cliente y extrae un id';
    $dato ['pruebas']=$this->unit->run($pruebas, $resultado ,$nombre,'prueba que la consulta a la tabla Imagen_Cliente no esta vacia');
    $dato ['titulo']='prueba tipo de usuario';
    $dato ['contenido']='pruebas';
    $this->load->view('pruebas',$dato);
    
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
        $this->load->library('unit_test');         
		if(isset($_POST['submit'])){        
        $userType="cliente";
        $idCliente=1;        
        $urlImagen=uploadImage($userType,$_POST['imagename']);         
        $datos= new ImagenClienteDTO($urlImagen,$_POST['imagename'],$idCliente); 
        $this->pruebaImageNombre($_POST['imagename']);//Prueba::::::::::::::::::::::::::::::::::
		$this->pruebaCarga($urlImagen); //prueba::::::::::::::::::::::::::::::::::::::::::::::::     
        $this->dep->Guardar($datos,$this->db); 
        $resultadoImagen= $this->traerIdImagen($idCliente,$urlImagen);
         //pruebas:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 
        $this->pruebaTallas($_POST['talla']);

        $this->pruebaPrenda($_POST['prenda']);
        $this->pruebaTipoTela($_POST['tela']);
        $this->pruebaColor($_POST['color']);
        $this->pruebaDescripcion($_POST['descripcion']);
        $this->pruebaTraerPrendas($resultadoPrendas);
        $this->pruebaTraerTallas($resultadoTallas);
        $this->pruebaTraerTelas($resultadoTelas);
        $this->pruebaTraerIdImagen($resultadoImagen);
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 
       
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