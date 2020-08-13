<?php 
class RegistroCompradorDTO{
private $idRegistroComprador;
private $nombreUsuario;
private $nombre;
private $apellidos;
private $fechaNacimiento;
private $email;
private $contrasena;
private $verificarContrasena;
 public function __construct(  $nombreUsuario,$nombre,$apellidos,$fechaNacimiento,$email,$contrasena,$verificarContrasena){
       $this->nombreUsuario=$nombreUsuario;
     $this->nombre=$nombre;
     $this->apellidos=$apellidos;
     $this->fechaNacimiento=$fechaNacimiento;
     $this->email=$email;
     $this->contrasena=$contrasena;
     $this->verificarContrasena=$verificarContrasena;
 }
 public function getIdRegistroComprador(){
     return $this->idRegistroComprador;
 }
 public function getNombreUsuario(){
     return $this->nombreUsuario;
 }
 public function getNombre(){
     return $this->nombre;
 }
 public function getApellidos(){
     return $this->apellidos;
 }
 public function getFechaNacimiento(){
     return $this->fechaNacimiento;
 }
 public function getEmail(){
     return $this->email;
 }
 public function getContrasena(){
     return $this->contrasena;
 }
 public function getVerificarContrasena(){
    return $this->verificarContrasena;
}
 public function toString():array{
    return[
        'id_RegistroComprador'=>$this->idRegistroComprador,
        'nombreUsuario'=>$this->nombreUsuario,
        'nombre'=>$this->nombre,
        'apellidos'=>$this->apellidos,
        'fechaNacimiento'=>$this->fechaNacimiento,
        'email'=>$this->email,
        'contrasena'=>$this->contrasena,
        'verificarContrasena'=>$this->verificarContrasena
    ];
}


}



?>