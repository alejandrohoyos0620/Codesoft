<?php 
//capturo la variable que envie desde el ajax
    $nombreEstampador = $_POST['nombreEstampador'];
    $user = "root";
    $password = "";
    $server = "localhost";
    $BD="calificaciones";

    try {
        $conn = new PDO("mysql:host=localhost;dbname=calificaciones","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt=$conn->prepare("SELECT AVG(Calificacion) as promedio FROM estampadores WHERE Nombre = '" . $nombreEstampador . "'" );
        $stmt->setFetchMode(PDO::FETCH_OBJ);	
        $stmt->execute();
        $usuarios = $stmt->fetchAll();
    
        $conn = null;
    } 
    catch (PDOException $e) {
        echo $e;
    }

    $json = json_encode($usuarios);
    header('Content-Type: application/json');
    echo $json;
?>