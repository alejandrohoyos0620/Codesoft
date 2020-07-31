<?php



defined('BASEPATH') || exit('No direct script access allowed');

class RegistroCompradorEstampadosControladora extends CI_Controller {
  public $dep;
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
            if (strlen($_POST['nombreUsuario']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['fechaNacimiento']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['verificarContrasena']) >= 1 ) {
                if($_POST['contrasena'] == $_POST['verificarContrasena']){
                    $crearRegistroComprador= new RegistroCompradorDTO($_POST['nombreUsuario'],
                    $_POST['nombre'],$_POST['apellidos'],$_POST['fechaNacimiento'],$_POST['email'],$_POST['contrasena'],$_POST['verificarContrasena']);
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
}
?>
