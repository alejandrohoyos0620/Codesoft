<?php 

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 &&  strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1 ) {
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$email = trim($_POST['email']);
		$contraseña = trim($_POST['contraseña']);
	    $fecharegistro = date("d/m/y");
		$consulta = "INSERT INTO formularioregistro (nombre, apellido, email, contraseña, fecharegistro) VALUES ('$nombre','$apellido','$email','$contraseña','$fecharegistro')";
		
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Lo sentimos, ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>