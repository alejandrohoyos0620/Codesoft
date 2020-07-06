<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css"> <!--referncia a estilo.css para darle estilo-->
</head>
<body>
    <form method="post"> <!--Los datos los vamos a enviar por el método post-->
    	<h1>Formulario de Registro</h1>
        <input type="text" name="nombre" placeholder="Nombre completo"><!--Placeholder para que dentro del recuadro me aparezco nombre...-->
        <input type="text" name="apellido" placeholder="Apellidos">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="contraseña" placeholder="Contraseña">
        <button type="submit" name="registrar" class="boton" >Registrar</button>
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>