<?php
	
	require 'conexion.php';
	require './config/config.php';
	$id = openssl_decrypt($_POST['id'],AES,KEY);
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$telefono2 = $_POST['telefono2'];
	$celular = $_POST['celular'];
	$direccion = $_POST['direccion'];
	$empresa = $_POST['empresa'];
	$notas = $_POST['notas'];




	$sql = "UPDATE contactos SET nombre='$nombre',apellido='$apellido',correo='$email', telefono='$telefono', telefono2='$telefono2', celular='$celular', direccion='$direccion', empresa='$empresa', notas='$notas' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	header("Location: index.php?m=2");

	

	
	
	
	


?>





<html lang="es">
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sweetalert.js"></script>	
			
	</head>

	
</html>
