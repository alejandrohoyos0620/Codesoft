<?php

defined('BASEPATH') || exit('No direct script access allowed');

class RegistroCompradorEstampadosControladora extends CI_Controller { 
  public $registro;
  
     public function __construct(){
         parent::__construct();
        $this->appRegistroD=new RegistroComprador_Imp();    
        $appRegistroD2= new RegistroComprador_ImpDTO($this->appRegistroD);
        $this->registro=$appRegistroD2; 
  
   
    }
/*
    /index Carga 2 vistas header y vistaSolicitudDiseño a la cual le enviamos las los dato las tallas,
    prendas,tipo de tela, Valida una peticion post y crea una nueva ImagenClienteDTO y SolicitudDiseñoDTO 
    y lo guarda en la base de datos.
*/


	public function index()
	{    
		$this->load->view('header');
        $this->load->view('vistaregistrarcompradorestampados');           
		if(isset($_POST['submit'])){   
            $this->Registrar();   
         } 	
    }

    public function Registrar (){
        $nombreUsuario1= $_POST['nombreUsuario'];
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $fechaNacimiento=$_POST['fechaNacimiento'];
        $email= $_POST['email'];
        $contrasena=$_POST['contrasena'];
        $verificarContrasena=$_POST['verificarContrasena'];
    if (strlen($nombre) >= 1 && strlen($nombreUsuario1) >= 1 && strlen($apellidos) >= 1 
    && strlen($fechaNacimiento) >= 1 && strlen($email) >= 1 && strlen($contrasena) >= 1 
    && strlen($verificarContrasena) >= 1 ) {
        if($contrasena == $verificarContrasena){
            $crearRegistroComprador= new RegistroCompradorDTO($nombreUsuario1,
            $nombre,$apellidos,$fechaNacimiento,$email,$contrasena,$verificarContrasena);
                if($this->registro->GuardarRegistro($crearRegistroComprador,$this->db)) {
                ?> 
                    <h3 class="ok">¡Te has inscrito correctamente!</h3>
                <?php
                } else {
                ?> 
                    <h3 class="bad">¡Lo sentimos, ha ocurrido un error!</h3>
                <?php
                }
        }else {
                ?> 
                    <h3 class="bad">¡Las contraseñas no coinciden!</h3>
                <?php
        }
        }else {
            ?> 
                 <h3 class="bad">¡Por favor complete los campos!</h3>
    
            <?php
         }

    }
}
?>
