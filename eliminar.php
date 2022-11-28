<?php
	
	require 'conexion.php';




	$id = $_POST['ide'];
	$clave = $_POST['clave'];

	echo 'la clave es:',$clave;
	echo "<br/>";
	echo 'el ide es :',$id;




	$verificar_contraseña= mysqli_query($mysqli,"SELECT *FROM claves WHERE clave='$clave'");
	if(mysqli_num_rows($verificar_contraseña)<1){
		echo'
			<script>
				alert ("contraseña incorrecta");

			</script>
			';
			exit();

	}else 
		echo '
			<script>
				alert("la contraseña es valida");
			</script>
			';

			$sql = "DELETE FROM contactos WHERE id = '$id'";
			$resultado = $mysqli->query($sql);
			header("Location: index.php?m=3");
			

	/*
	if($id == null or $id == ""){
		echo "error";
		header("Location: index.php");
	} 
	*/
?>


<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/prueba.js"></script>	
	</head>
	

</html>
