<!DOCTYPE html>
<head>
	<meta charset="utf-8">
</head>
<body>
	

	<form action="post">
	<?php error_reporting(0);
		$user = "root";
		$password = "";
		$server = "localhost";
		$BD="calificaciones";

		try {
			$conn = new PDO("mysql:host=localhost;dbname=calificaciones","root","");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt=$conn->prepare("SELECT AVG(Calificacion) as promedio FROM estampadores");
			$stmt->setFetchMode(PDO::FETCH_OBJ);	
			$stmt->execute();
			$usuarios = $stmt->fetchAll();
		
			$conn = null;
		} 
		catch (PDOException $e) {
			echo $e;
		}

		$conection = mysqli_connect($server, $user, $password, $BD);

		if($conection){
			echo "<p>esito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial.</p>" . PHP_EOL;
			echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
			
		} else {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuraci�n: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuraci�n: " . mysqli_connect_error() . PHP_EOL;
		exit;
		}
		
		$consulta ="SELECT AVG(Calificacion) as promedio FROM estampadores";
		$accion = mysqli_query($conection,$consulta);
		
		$prom = 0;
		while($RES = mysqli_fetch_array($accion)){
			
			$prom = $RES['promedio'];
		} 

		//echo "Este es el promedio desde la BD->".$prom;
		var_dump($usuarios);

	?>
</body>
</html>