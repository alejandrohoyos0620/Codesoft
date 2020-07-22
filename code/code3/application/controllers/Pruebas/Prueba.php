<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
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


		public function pruebaIsAdmin ($datos){
		$pruebas  = $datos;
		$resultado = "admin";
		$nombre = 'tipo Admin';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'prueba que sea un admiistrador');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
        $this->load->view('VistaImagen/header');
        $this->load->view('VistaImagen/body');
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }
 public function pruebaIsCliente ($datos){
		$pruebas  = $datos;
		$resultado = "cliente";
		$nombre = 'tipo cliente';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'preuba que sea un cliente');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
        $this->load->view('VistaImagen/header');
        $this->load->view('VistaImagen/body');
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }

 public function pruebaIsDev ($datos){
		$pruebas  = $datos;
		$resultado = "desarrollador";
		$nombre = 'tipo cliente';
		$dato ['pruebas']=$this->unit->run($pruebas,$resultado,$nombre,'prueba que sea un desarrolador');
		$dato ['titulo']='prueba tipo de usuario';
		$dato ['contenido']='pruebas';
        $this->load->view('VistaImagen/header');
        $this->load->view('VistaImagen/body');
		$this->load->view('VistaImagen/pruebas',$dato);
		
 }


*/
?>
