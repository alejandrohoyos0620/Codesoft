<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    </head>
    <body>
    <?php
$mysqli = conectar();//inicializamos la conexion con la base de datos.

/**
 * Tomamos los datos del formulario y los asignamos a las variables $usuario, $password.
 * establecemos una conexion con la base de datos y realizamo una consulta para verficar la existencia del usuraio 
 * en caso de exito, creamos una sesión con el identificador el usuario,en caso de fallar mostramos un mensaje de error 
 * entendible por el usuario.
 */
if(array_key_exists('ingresar',$_POST)) {
    $usuario =$_POST['usuario'] ;
    $password = $_POST['password'];   
    $query = mysqli_query($mysqli, "SELECT * FROM usuario WHERE nombreUsuario='$usuario' AND contraseña ='$password'")or dir(mysqli_error($mysqli));
    if (mysqli_num_rows($query) > 0) {
        $respuesta = mysqli_fetch_array($query);
        $_SESSION['id'] = $respuesta['idUsuario'];
       
    }else{
        echo "Datos Incorrectos";
    }
}
/**
 * al presionar la opción de salir  destruimos la session creada en ese momento y redireccionamos a este mismo modulo
 * para que se pueda iniciar una nueva sesison.
 */
if(array_key_exists('salir',$_POST)) {
    @session_destroy();
    $url = "?modulo=loggeo";
  ?>
<script type="text/javascript">
window.location = "<?= $url ?>";
</script>
<?php
}
if(!isset($_SESSION['id'])){// se verifica que la sessione aun no este creada para visualizar el formulario de Loggeo.
    ?>
<form method="post" action="" class="formulario">
    <div class="contenedor_inputs">
        <label>
            <h2 class="titulo_formulario">Iniciar sesión</h2>
        </label>
        <input type="text" class="input_formulario" placeholder="  Usuario" name="usuario" />
        <input type="password" class="input_formulario" placeholder="  Contraseña" name="password" />

        <div class="boton">
            <button class="btn_ingresar" name="ingresar" type="submit">Ingresar</button>
        </div>
    </div>
</form>
</body>
<?php


}else{ // si la sesión ya existe se mostrara lo que se encuentre aca para este caso.
?>
<div>
    <h2 class="letrero">Bienvenido...</h2>
    <form method="post" action="" class="formulario_sesion">
    <div class="btn_formulario">
        <button class="btn_salir" name="salir" type="submit">salir</button>
    </div>
    </form>

</div>
</body>
<?php
}
?>