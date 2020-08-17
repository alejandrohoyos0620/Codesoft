<?php

defined('BASEPATH') || exit('No direct script access allowed');

class VisualizarSolicitudesDisenoControladora extends CI_Controller { 
  

	public function __construct(){
		parent::__construct();
	//-------inyecciónImagenCliente---------------//
	   $this->app2=new ImagenCliente_Imp();    
	   $app= new ImagenCliente_ImpDTO($this->app2);
	   $this->dep=$app;
	   //----------inyeccionSolicitudes-------------//
	   $this->appSolicitudD=new SolicitudDiseno_Imp();    
        $appSolicitudD2= new SolicitudDiseno_ImpDTO($this->appSolicitudD);
		$this->solicitud=$appSolicitudD2; 
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
		$this->Todo=TRUE;
	}
	public function index()
	{    
		$resultadoSolicitudDisenos = $this->traerSolicitudesDiseno();
		$i=0;
		if($resultadoSolicitudDisenos!=null){ 
			foreach($resultadoSolicitudDisenos as $r) { 
				if($r!=null){
				$resultadoUrlImagen[]=	$this->traerUrl(1,$r->getIdImagen());
				$resultadoTallas[]=$this->traerNombreTalla($r ->getIdTalla());
				$resultadoPrendas[]=$this->traerTipoPrenda($r ->getIdPrenda());
				$resultadoTelas[]=$this->traerNombreTela($r ->getIdTela());
				}
			}
		}
		$this->load->view('header');
		$this->load->view('vistaMenuVisualizarSolicitudesDiseno');

		if(isset($_POST['todo'])){
		$this->load->view('vistaVisualizarSolicitudesDiseno',compact("resultadoSolicitudDisenos","resultadoUrlImagen","resultadoTelas","resultadoPrendas","resultadoTallas")); 
		}
		elseif(isset($_POST['camisas'])){
			$resultadoTallas=null;
			$resultadoPrendas=null;
			$resultadoTelas=null;
			$resultadoUrlImagen=null;
			$resultadoSolicitudDisenos = $this->traerSolicitudesDisenoCategoria(1);
			
			$i=0;
		if($resultadoSolicitudDisenos!=null){ 
			foreach($resultadoSolicitudDisenos as $r) { 
				if($r!=null){
				$resultadoUrlImagen[]=	$this->traerUrl(1,$r->getIdImagen());
				$resultadoTallas[]=$this->traerNombreTalla($r ->getIdTalla());
				$resultadoPrendas[]=$this->traerTipoPrenda($r ->getIdPrenda());
				$resultadoTelas[]=$this->traerNombreTela($r ->getIdTela());
				}
			}
		}
		$this->load->view('vistaVisualizarSolicitudesDiseno',compact("resultadoSolicitudDisenos","resultadoUrlImagen","resultadoTelas","resultadoPrendas","resultadoTallas"));   
		}
		elseif(isset($_POST['busos'])){
			$resultadoTallas=null;
			$resultadoPrendas=null;
			$resultadoTelas=null;
			$resultadoUrlImagen=null;
			$resultadoSolicitudDisenos = $this->traerSolicitudesDisenoCategoria(2);
			
			
			$i=0;
		if($resultadoSolicitudDisenos!=null){ 
			foreach($resultadoSolicitudDisenos as $r) { 
				if($r!=null){
				$resultadoUrlImagen[]=	$this->traerUrl(1,$r->getIdImagen());
				$resultadoTallas[]=$this->traerNombreTalla($r ->getIdTalla());
				$resultadoPrendas[]=$this->traerTipoPrenda($r ->getIdPrenda());
				$resultadoTelas[]=$this->traerNombreTela($r ->getIdTela());
				}
			}
		}
		$this->load->view('vistaVisualizarSolicitudesDiseno',compact("resultadoSolicitudDisenos","resultadoUrlImagen","resultadoTelas","resultadoPrendas","resultadoTallas"));   
		}
		elseif(isset($_POST['pañoletas'])){
			$resultadoTallas=null;
			$resultadoPrendas=null;
			$resultadoTelas=null;
			$resultadoUrlImagen=null;
			$resultadoSolicitudDisenos = $this->traerSolicitudesDisenoCategoria(3);
			
			$i=0;
		if($resultadoSolicitudDisenos!=null){ 
			foreach($resultadoSolicitudDisenos as $r) { 
				if($r!=null){
				$resultadoUrlImagen[]=	$this->traerUrl(1,$r->getIdImagen());
				$resultadoTallas[]=$this->traerNombreTalla($r ->getIdTalla());
				$resultadoPrendas[]=$this->traerTipoPrenda($r ->getIdPrenda());
				$resultadoTelas[]=$this->traerNombreTela($r ->getIdTela());
				}
			}
		}
		$this->load->view('vistaVisualizarSolicitudesDiseno',compact("resultadoSolicitudDisenos","resultadoUrlImagen","resultadoTelas","resultadoPrendas","resultadoTallas"));   
		}
		elseif(isset($_POST['tapabocas'])){
			$resultadoTallas=null;
			$resultadoPrendas=null;
			$resultadoTelas=null;
			$resultadoUrlImagen=null;
			$resultadoSolicitudDisenos = $this->traerSolicitudesDisenoCategoria(4);
			
			$i=0;
			print_r($resultadoSolicitudDisenos);
		if($resultadoSolicitudDisenos!=null){ 
			foreach($resultadoSolicitudDisenos as $r) { 
				if($r!=null){
				$imagen =$this->traerUrlImagen(1,$r ->getIdImagen());
				$resultadoUrlImagen[]=$imagen[1]; 
				$resultadoTallas[]=$this->traerNombreTalla($r ->getIdTalla());
				$resultadoPrendas[]=$this->traerTipoPrenda($r ->getIdPrenda());
				$resultadoTelas[]=$this->traerNombreTela($r ->getIdTela()); 
				}
			}
		}
		$this->load->view('vistaVisualizarSolicitudesDiseno',compact("resultadoSolicitudDisenos","resultadoUrlImagen","resultadoTelas","resultadoPrendas","resultadoTallas"));   
		}
		elseif(isset($_POST['gorras'])){
			$resultadoTallas=null;
			$resultadoPrendas=null;
			$resultadoTelas=null;
			$resultadoUrlImagen=null;
		$resultadoSolicitudDisenos = $this->traerSolicitudesDisenoCategoria(5);
		$i=0;
		if($resultadoSolicitudDisenos!=null){ 
			foreach($resultadoSolicitudDisenos as $r) { 
				if($r!=null){
				$resultadoUrlImagen[]=	$this->traerUrl(1,$r->getIdImagen());
				$resultadoPrendas[]=$this->traerTipoPrenda($r ->getIdPrenda());
				$resultadoTallas[]=$this->traerNombreTalla($r ->getIdTalla());
				$resultadoTelas[]=$this->traerNombreTela($r ->getIdTela());
				}
			}
		}
		$this->load->view('vistaVisualizarSolicitudesDiseno',compact("resultadoSolicitudDisenos","resultadoUrlImagen","resultadoTelas","resultadoPrendas","resultadoTallas"));   
	}
		
	}
	public function traerSolicitudesDiseno(){
		$listaSolicitudesDiseno= $this->solicitud->ListarSolicitudes($this->db);
		return  $listaSolicitudesDiseno;
	 }
	 public function traerSolicitudesDisenoCategoria($id){
		$listaSolicitudesDiseno1= $this->solicitud->ListarSolicitudesCategoria($id,$this->db);
		return  $listaSolicitudesDiseno1;
	 }
	 public function traerUrlImagen($idCliente,$id){
		return $this->dep->BuscarURL($idCliente,$id,$this->db);
	 }
	  /**
     * traerTallas, se encarga de traer un array con las tallas de ropa.
     */
    public function traerTalla($id){
		return $this->tallas->BuscarTalla($id,$this->db);
	
 
	 }
	 /**
	  * traerPrendas, se encarga de traer un array con los tipos de prendas.
	  */
	 public function traerPrenda($id){
		 return $this->prendas->BuscarPrenda($id,$this->db);
		 
  
	  }
	   /**
	  * traerTelas, se encarga de traer un array con los tipos de tela.
	  */
	  public function traerTela($id){
		 return $this->telas->BuscarTela($id,$this->db);  
	  }
	  public function traerNombreTalla($id)
	  {
		$talla=$this->traerTalla($id);
		return $talla->getNombre();
	  }
	  public function traerNombreTela($id)
	  {
		$tela=$this->traerTela($id);
		return $tela->getNombre();
	  }
	  public function traerTipoPrenda($id)
	  {
		$prenda=$this->traerPrenda($id);
		return $prenda->getTipo();
	  }
	  public function traerUrl($idCliente,$id)
	  {
		$imagen=$this->traerUrlImagen($idCliente,$id);
		return $imagen[1];
	  }
    
}
?>
