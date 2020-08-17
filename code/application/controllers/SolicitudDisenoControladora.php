<?php

defined('BASEPATH') || exit('No direct script access allowed');

class SolicitudDisenoControladora extends CI_Controller {
  public $dep;
  public $tallas;
  public $prendas;
  public $telas;
  public $solicitud;

 

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
       $this-> Solicitar();
    }

    
}
public function Solicitar()
{   
    $userType="cliente";
    $idCliente=1;   
    if(isset($_POST['Movil'])){
       $tallaCompleta = $this -> traerIdTalla($_POST['talla']);
       $prendaCompleta= $this -> traerIdPrenda($_POST['prenda']); 
       $telaCompleta= $this -> traerIdTela($_POST['tela']);
       $talla=$tallaCompleta->getIdTalla();
       $tela=$telaCompleta->getIdTela();
       $talla=$tallaCompleta->getIdPrenda();
       $nombreImagen = $_POST['imagename'];
       $imagenBit = $_POST['imagenMovil'];
       $urlImagen=uploadImageMovil($userType,$nombreImagen,$imagenBit); 
       echo $urlImagen;
    }
    else{
        $talla= $_POST['talla'];
        $prenda= $_POST['prenda']; 
        $tela=$_POST['tela'];
        $urlImagen=uploadImage($userType,$_POST['imagename']);     
        
    }
    $color=$_POST['color'];
    $descripcion=$_POST['descripcion'];
    if (strlen($prenda) >= 1 && strlen($talla) >= 1 && strlen($color) >= 1 
    && strlen($tela) >= 1 ) {
       
        $datos= new ImagenClienteDTO($urlImagen,$_POST['imagename'],$idCliente);        
        $this->dep->Guardar($datos,$this->db); 
        $resultadoImagen= $this->traerIdImagen($idCliente,$urlImagen);
        $crearSolicitud= new SolicitudDisenoDTO(null,$prenda,
        $talla,$color,$tela,$descripcion,$resultadoImagen[0]);
        $this->solicitud->Guardar($crearSolicitud,$this->db);
    }
    
    
    
}

public function traerIdTalla($talla)
{  
    return $this->tallas->BuscarID($talla, $this->db);
}
public function traerIdPrenda($prenda)
{  
    return $this->prendas->BuscarID($prenda, $this->db);
}
public function traerIdTela($tela)
{  
    return $this->telas->BuscarID($tela, $this->db);
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
        return $this->prendas->ListarPrendas($this->db);
        
 
     }
      /**
     * traerTelas, se encarga de traer un array con los tipos de tela.
     */
     public function traerTelas(){
        return $this->telas->ListarTelas($this->db);
        
 
     }
      /**
     * traerIdImagen, se encarga buscar el id de  la imagen que esta siendo cargada en la base de
     * datos para ser asociada  a la solicitud del diseño.
     * $id=id del cliente.
     * $url=segundo identificados unico de la imagen.
     */
     public function traerIdImagen($id,$url){        
        return $this->dep->BuscarID($id,$url,$this->db);
          
 
     }
    
   

}
?>
