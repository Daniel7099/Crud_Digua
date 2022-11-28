<?php
	require 'conexion.php';
	require './config/config.php';
	$id = openssl_decrypt($_GET	['id'],AES,KEY);
	$sql = "SELECT * FROM contactos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
	if($id == null or $id == ""){
		echo "error";
		header("Location: index.php");
	} 

	
/*
	if(!isset($_GET["id"]) or !is_numeric($_GET["id"]))
	{
		header("Location: index.php");
	}

	if(!isset($_GET["id"]))
	{
		die("error 404");
	}
*/

	if(isset($_GET['URL'])) {
		$url = $_GET['URL'];
		header('Location:index.php');
		die();
	 }

	 if ('telefono == null '){
		
	 }


?>
<html lang="es">
	<head>
		
		<meta charset="utf-8">
		<title>..:: Listado de contactos ::..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />

	</head>
	
	<body>
	
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="index.php">Inicio</a></li>
		  <li class="active">Actualizar contactos</li>
		</ol>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Actualizar contactos</h3>
			</div>
			<div class="panel-body">
				<style>
					
					input{
						width: 150px;
					}
					span{
						font-size: 11.5px;
					}

					@media (max-width: 50em) {
							span{
                                font-size: 0px;
                            }
							}

				</style>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="nombre">Nombres:</label>
                        <input type="text" name="nombre" maxlength="40" value="<?php echo $row['nombre']; ?>"placeholder="Nombre" autofocus="true" class="form-control" required pattern="[A-Za-z ]+" title="Los nombres tienen que ser hasta 40 digitos y solo es posible contener letras." />
 				</div>
				 <div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
            		</p>

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="apellido">Apellidos:</label>
                        <input type="text" name="apellido" maxlength="40" value="<?php echo $row['apellido']; ?>"placeholder="Apellido" autofocus="true" class="form-control" pattern="[A-Za-z ]+" title="Los apellidos tienen que ser hasta 40 digitos y solo es posible contener letras."/>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
                    </p>

                    <p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="correo">E-Mail:</label>
                        <input type="email" name="correo" maxlength="50" value="<?php echo $row['correo']; ?>"placeholder="E-Mail" class="form-control" 
						pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="El e-mail puede ser hasta 50 digitos. Solo puede contener letras, numeros, puntos y guiones bajos." />
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
                    </p>

                    <p>
			<div class="row">
 				<div class="col-sm-4">
                    <label for="telefono">Teléfono:</label>
                        <input type="tel" id=""name="telefono" maxlength="15" value="<?php echo $row['telefono']; ?>" placeholder="Teléfono" class="form-control" required
						title="El telefono tiene que ser hasta 15 digitos y solo puede contener numeros."oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>			
                    </p>

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="telefono2">Teléfono2:</label>
                        <input type="tel" id="" name="telefono2" maxlength="15" value="<?php echo $row['telefono2']; ?>"placeholder="Telefono2" autofocus="true" class="form-control"
						title="El telefono2 tiene que ser hasta 15 digitos y solo puede contener numeros." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>	
                    </p>

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="celular">Celular:</label>
                        <input type="tel" name="celular" maxlength="15" value="<?php echo $row['celular']; ?>"placeholder="Celular" autofocus="true" class="form-control" 
						title="El celular tiene que ser hasta 15 digitos y solo puede contener numeros." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
                    </p>

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" maxlength="50" value="<?php echo $row['direccion']; ?>"placeholder="Direccion" autofocus="true" class="form-control"
						title="La direccion tiene que ser hasta 50 digitos.Puede contener letras, numeros, signos, guiones. puntos." />
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
                    </p>

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="empresa">Empresa/Rubro:</label>
                        <input type="text" name="empresa" maxlength="40" value="<?php echo $row['empresa']; ?>"placeholder="Empresa" autofocus="true" class="form-control"
						title="La Empresa o Rubro tiene que ser hasta 40 digitos. Solo puede contener letras y numeros." pattern="[A-Za-z0-9]+"/>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
                    </p>

					<p>
			<div class="row">
 				<div class="col-sm-4">
                        <label for="notas">Detalle:</label>
                        <br>
                        <textarea id="text-area"  title="El detalle tiene que ser hasta 100 digitos. Puede contener letras, numeros, signos, guiones. puntos."
						style="font-family: Arial; font-size: 8pt;"type="text"name="notas" cols="47" rows="5" maxlength="100"class="form-control" placeholder="descripción"><?php echo $row['notas']; ?></textarea>
				</div>
				<div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"><b></b></span>
                        <div id=""></div>
                    </div>
                    </div>
			</div>
					</p>

					<hr/>
				
				<input type="hidden" id="id" name="id" value="<?php echo openssl_encrypt($row['id'],AES,KEY) ?>" />

				<input type="submit"data-toggle="modal"href="#ventana1" onclick="eliminaEspacios();" value="Guardar" class="btn btn-primary"/>
				<a class="btn btn-danger" href="index.php">Cancelar</a>

			</form>
		</div>
		<script src="js/app.js"></script>
		<script src="js/prueba.js"></script>
		<script src="js/sweetalert.js"></script>	
		
	</body>
</html>

<!--class="inputDescripcion" -->

<!--class="inputDescripcion"  

Reemplazo no deja introducir espacios celulares :oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');

descripcion ::*El detalle tiene que ser hasta 100 digitos.Puede contener letras, numeros, signos, guiones. puntos.

correo : pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="El e-mail debe tener hasta 50 digitos. solo puede contener letras, numeros, puntos y guiones bajos."

telefonos :min="1" pattern="^[0-9]+"
-->