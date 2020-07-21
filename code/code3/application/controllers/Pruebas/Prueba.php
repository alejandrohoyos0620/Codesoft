<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
public function index(){
		$this->load->library('unit_test');
		$pruebas  = 1+1;
		$resultado = 2;
		$nombre = 'suma';
		$datos ['pruebas']=$this->unit->run($Pruebas,$resultado,$nombre);
		$datos ['titulo']='pruebas de unit test';
		$datos ['contenido']='pruebas';
		$this->load->view('views/VistaImagen',$datos);
		
	}
}


?>
