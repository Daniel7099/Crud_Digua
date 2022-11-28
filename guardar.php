<?php
	
	require 'conexion.php';

	
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$telefono2 = $_POST['telefono2'];
	$celular = $_POST['celular'];
	$direccion = $_POST['direccion'];
	$empresa = $_POST['empresa'];
	$notas = $_POST['notas'];

	
	$verificar_correo= mysqli_query($mysqli,"SELECT *FROM contactos WHERE apellido='$apellido'and nombre='$nombre' and telefono = '$telefono'");
	if(mysqli_num_rows($verificar_correo)>0){
		echo'
			<script>
				alert ("este contacto ya existe");
				window.location = "index.php"
			</script>
			';
			exit();

	}
	

	
	$sql = "INSERT INTO contactos (nombre,apellido,correo,telefono,telefono2,celular,direccion,empresa,notas) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$telefono2', '$celular','$direccion','$empresa','$notas')";
	trim($notas);
	$resultado = $mysqli->query($sql);
	header("Location: index.php?m=1");

?>

<html lang="es">
	<head>
		
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		
	</head>
	

</html>
