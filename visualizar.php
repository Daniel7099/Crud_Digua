<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
    $id = $_GET['id'];
	$sql = "SELECT * FROM contactos where id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>..:: Detalles de contactos ::..</title>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	</head>
	
	<body>
		<div class="container">
        <ol class="breadcrumb">
		  <li><a href="index.php">Inicio</a></li>
		  <li class="active">Detalle contactos</li>
		</ol>
		<div class="panel panel-info">
			<div class="panel-heading">
				
					<br>
		
					<h3>Detalles</h3>
			</div>
			<div class="panel-body">
					</div>

					<br>

				<table class="table table-bordered  ">	
					<thead>	
						<tr class="info">
								<th>Nombres</th>
								<th>Fecha</th>
								<th>Descripción</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						<tr>
							<td><?php echo $row['nombre'] ?></td>
							<td><?php echo $row['fecha'] ?></td>
							<td><?php echo $row['notas'] ?></td>
							<td>
						</tr>
						<?php 
						} 
						?>
					</tbody>
				</table>
			</div>
		</div>
		
		
		

		<script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/funciones.js"></script>
		<script src="js/buscador.js"></script>
	</body>
</html>	