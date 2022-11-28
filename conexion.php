<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'contacto');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>