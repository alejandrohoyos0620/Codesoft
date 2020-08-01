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
    /index Carga 2 vistas: header y vistaRegistrarCompradorEstampados. Tambien se llama a la función registrar cuando 
    se activa el submit de la vista.
*/


	public function index()
	{    
		$this->load->view('header');
        $this->load->view('vistaregistrarcompradorestampados');           
		if(isset($_POST['submit'])){   
            $this->Registrar();   
         } 	
    }
/*
    Registrar captura los datos de los campos del formulario en vistaRegistrarCompradorEstampados, 
    valida la coincidencia de las contraseñas, crea un registro de comprador, lo almacena en la base de datos y 
    notifica el estado del registro.
*/
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
        if((substr($fechaNacimiento, -4)>1920)&& substr($fechaNacimiento,-4)<2002){
            if($contrasena == $verificarContrasena){
                $crearRegistroComprador= new RegistroCompradorDTO($nombreUsuario1,
                $nombre,$apellidos,$fechaNacimiento,$email,$contrasena,$verificarContrasena);
                if($this->registro->GuardarRegistro($crearRegistroComprador,$this->db)) {
                    ?> 
                        <h3 class="ok">¡Te has inscrito correctamente!</h3>
                    <?php
                } 
                else {
                    ?> 
                        <h3 class="bad">¡Lo sentimos, ha ocurrido un error!</h3>
                    <?php
                }
            }
            else{
                ?> 
                    <h3 class="bad">¡Las contraseñas no coinciden!</h3>
                <?php
            }
        }
        else{
                ?> 
                    <h3 class="bad">No cumples con la edad requerida para registrarte</h3>
        
                <?php
            }
        }
    else{
            ?> 
                <h3 class="bad">Completa los campos por favor</h3>
            <?php
        }
        
    }

}

?>
