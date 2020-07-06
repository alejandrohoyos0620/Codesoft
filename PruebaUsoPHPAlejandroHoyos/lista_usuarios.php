<?php 
function conectar(){
$mysql_host="localhost";
$mysql_userName="root";
$mysql_password="";
$mysql_db="usuarios";
$mysql_puerto=3306;
return new mysqli($mysql_host, $mysql_userName, $mysql_password, $mysql_db, $mysql_puerto);
}


$mysqle = conectar();
$consultica = mysqli_query($mysqle, "SELECT * FROM usuarios_ventas");

?>

<!DOCTYPE html>
<link rel = "stylesheet" type ="text/css" href="style.css">
<html lang="es">
    <head>
        <meta charset="UTF 8">
       <!-- <?php include "scripts.php"; ?> -->
        <title>Sisteme Ventas</title>
    </head>
    <body>
        <!--<?php include "includes/header.php";?>-->
        <section id="container">
            <h1>Lista de usuarios</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                <tr>
                    <?php while($itera=mysqli_fetch_array($consultica)){ ?>
                    
                    <td><?=$itera['ID']?></td>
                    <td><?=$itera['Nombre']?></td>
                    <td><?=$itera['Correo']?></td>
                    <td><?=$itera['Rol']?></td>
                    <td>
                        <a class ="link_edit" href="#">Editar</a>
                        <a class ="link_delete" href="#">Delete</a>
                    </td>
                </tr>
                    <?php } ?>
                
            </table>
        </section>
       <!-- <?php include "footer.php";?>-->
    </body>
</html>