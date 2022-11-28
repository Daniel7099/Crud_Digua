<?php
	require 'conexion.php';
	include "./config/config.php";

#	$id = $_GET['id'];
	$where = "";
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM contactos $where"; // probar para eliminar 
	$resultado = $mysqli->query($sql);



?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>..:: Listado contactos agendados ::..</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

		<!-- link para responsive -->
		<link rel="stylesheet" href="//cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
		<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">

		<!-- link para data-table -->
		<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
		<!-- link para diseño tabla blanco negro -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bulma.min.css">

		<!-- links para alertas modal -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- links sweet alert -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		
		<script> 

		function enviar_formulario(){ 
		document.formulario1.submit() 
		} 




		</script> 



	</head>

	<body>
		
		<div class="container">
			<div class="panel-info">
				<div class="panel-heading">
					<h3 >Listado contactos</h3>


					<style>
						.table.datatable{
							font-family: Verdana, Geneva, Tahoma, sans-serif;
    						font-size: 13px;
							position: relative;
							clear: both;
							*zoom: 1;
							zoom: 1;
							
						}
						table{
								table-layout: fixed;
								width: 100px;
							}

							th, td {
								border: 1px solid blue;
								width: 10px;
								height: 80px;
								word-wrap: break-word ;
							}
							table#tablaPer th{ text-align: center; }
							div.dataTables_wrapper div.dataTables_filter input {
							margin-left: 0.5em;
							display: inline-block;
							font-size: 10pt;
							height: 25px;
							}
							a.pagination-link{
								font-size: 1.3em;
							}
							table.dataTable thead>tr>th.sorting:before, table.dataTable thead>tr>th.sorting:after, table.dataTable thead>tr>th.sorting_asc:before, table.dataTable thead>tr>th.sorting_asc:after, table.dataTable thead>tr>th.sorting_desc:before, table.dataTable thead>tr>th.sorting_desc:after, table.dataTable thead>tr>th.sorting_asc_disabled:before, table.dataTable thead>tr>th.sorting_asc_disabled:after, table.dataTable thead>tr>th.sorting_desc_disabled:before, table.dataTable thead>tr>th.sorting_desc_disabled:after, table.dataTable thead>tr>td.sorting:before, table.dataTable thead>tr>td.sorting:after, table.dataTable thead>tr>td.sorting_asc:before, table.dataTable thead>tr>td.sorting_asc:after, table.dataTable thead>tr>td.sorting_desc:before, table.dataTable thead>tr>td.sorting_desc:after, table.dataTable thead>tr>td.sorting_asc_disabled:before, table.dataTable thead>tr>td.sorting_asc_disabled:after, table.dataTable thead>tr>td.sorting_desc_disabled:before, table.dataTable thead>tr>td.sorting_desc_disabled:after {

							font-size: 1.9em;

							}

							@media (max-width: 30em) {
								.table.datatable {
								border-collapse: collapse;
								border-spacing: 0;
								width: 500%;
								border: 1px solid #ddd;
								}

								.table.datatable th, td {
								text-align: left;
								padding: 8px;
								}


								
								
							}
							


					</style>
						
						<!-- Modal -->


					
					<?php
					if(isset($_GET["m"])){
						switch($_GET["m"])
						{
							case '1':
								?>
							<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

							<script>
								var solicitud = "Hello world";
								swal({
									title: "",
									text: "Su contacto se ha registrado correctamente ",
									icon: "success",
									value: "confirm",
									buttons: {
										confirm: "Confirmar"
									}
								}).then(function() {
   							 window.location = "index.php";
							});
								</script>
						<?php
							break;
							case '2':
						?>
						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

						<script>
							swal({
								title: "",
								text: "Su contacto se ha actualizado correctamente ",
								icon: "success",
								value: "confirm",
								buttons: {
									confirm: "Confirmar",
								
								}			
							})
							.then(function() {
   							 window.location = "index.php";
							});
							</script>

						
						<?php
							break;
							case '21':
						?>
						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

						<script>
							swal({
								title: "",
								text: "Error al actualizar Contacto",
								icon: "error",
								value: "confirm",
								buttons: {
									confirm: "Confirmar"
								
								}
								
							})
							</script>
							<?php
							break;
							case '31':
						?>
						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

						<script>
							swal({
								title: "",
								text: "Error al eliminar Contacto",
								icon: "error",
								value: "confirm",
								buttons: {
									confirm: "Confirmar"
								
								}
								
							})
							</script>
							<?php
							break;
							case '11':
						?>
						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

						<script>
							swal({
								title: "",
								text: "Error al ingresar Contacto",
								icon: "error",
								value: "confirm",
								buttons: {
									confirm: "Confirmar"
								
								}
								
							})
							</script>
						<?php
							break;
							case '3':
						?>
						<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

							<script>

								swal({
									title: "",
									text: "Su contacto se ha eliminado correctamente ",
									icon: "success",
									value: "confirm",
									buttons: {
										confirm: "Confirmar"
									}
								}).then(function() {
								window.location = "index.php";
							});
								</script>
						<?php
						}
						}

						?>
						
						<br>
				</div>
						<br>
					<p>
						<a href="nuevo.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
					</p>
					
					<div class="box">
						<div class="box-body" style="overflow-x:auto;">
						<table class="table is-striped table-bordered table-hover table_id table-condensed "  id="tablaPer">	
							<thead >	
								<tr class="info">
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>Telefono2</th>
										<th>Celular</th>
										<th>Dirección</th>
										<th>Empresa//Rubro</th>
										<th><h6><b>Detalle</b></h6></th>
										<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
								<tr>
									<td><?php echo $row['nombre'] ?></td>
									<td><?php echo $row['apellido'] ?></td>
									<td><?php echo $row['correo'] ?></td>
									
									<?php
									if($row['telefono']=="0")
										echo "<td align='center'>-</td>";
									else	
										echo "<td align='center'>".$row['telefono']."</td>";

									?>
									<?php
									if($row['telefono2']=="0")
										echo "<td align='center'>-</td>";
									else	
										echo "<td align='center'>".$row['telefono2']."</td>";

									?>
									<?php
									if($row['celular']=="0")
										echo "<td align='center'>-</td>";
									else	
										echo "<td align='center'>".$row['celular']."</td>";

									?>

									<td><?php echo $row['direccion'] ?></td>
									<td><?php echo $row['empresa'] ?></td>
									<td><?php echo $row['notas'] ?></td>
									<td>
										<a href="modificar.php?id=<?php echo rawurlencode(openssl_encrypt($row['id'],AES,KEY)) ?>"><span class="btn btn-primary glyphicon glyphicon-pencil"></span></a>
									<!--	<a href="#" data-href="eliminar.php?id= <?php /*  echo $row['id']; */ ?>"  data-toggle="modal" data-target="#confirm-delete"><span class="btn btn-danger glyphicon glyphicon-trash"></span></a> -->
										<a href="#" data-href="eliminar.php?id=<?php  echo $row['id']; ?>" data-id=<?php  echo $row['id']; ?> data-toggle="modal" data-target="#confirm-delete"><span class="btn btn-danger glyphicon glyphicon-trash"></span></a>

									</tr>
								<?php 
								} 
								?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
			
			<!-- modal -->
			

		

		<!-- Modal2 -->
		
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Contacto</h4>
					</div>

					<div class="modal-body">
						¿Desea eliminar este contacto?



					<form action="eliminar.php" name="formulario1" id="formulario1" method="POST"> 
					<p>
					<div class="row">
						<div class="col-sm-4">
							<label for="clave">Contraseña para eliminar:</label>
							<!-- Clave para permitir eliminar contacto-->
							<input type="password" id="clave" name="clave" maxlength="12" placeholder="ingrese contraseña" autofocus="true" class="form-control" required/>

							<input type="text" id="id" name="id" value ="" maxlength="12"  autofocus="true" class="form-control" />
							<!--  id del contacto--><br/>
							<!--<input type="text"  value="" id="id" name="id" maxlength="12" autofocus="true" class="form-control" required/> -->
						</div>
					</div>
                    </p>

							<input onclick="" type="submit" class="btn btn-danger"   value="Verificar Clave"/>
					</form>	 
					
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
							
							<a type="submit" onclick="evaluar()"  class="btn btn-danger btn-ok">Eliminar</a>
						</div>


					
					<?php 
					/*
					<form action="eliminar.php" id="cerrarSesion" method="post">
					<p>
					<div class="row">
						<div class="col-sm-4">
							<label for="clave">Contraseña para eliminar:</label>
							<!-- Clave para permitir eliminar contacto-->
							<input type="password" name="clave" maxlength="12" placeholder="ingrese contraseña" autofocus="true" class="form-control" required/>
							<!--  id del contacto-->
							<!-- <input type="" name="id" maxlength="12"/> -->
						</div>
					</div>
                    </p>
					
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
							
							<input onclick="" type="submit" class="btn btn-danger btn-ok" value="Eliminar"/> <!--envia la clave -->
							
							<a  type="submit" id="salir" class="btn btn-danger btn-ok">Eliminar</a>
						</div>
					</form>
					*/			
					?>
					<!-- <a >envia la id  -->
					
					</div>
					
				
				</div>
			</div>
		</div>
		

		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
			


		</script>	
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/jquery-3.1.1.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/prueba.js"></script>
        <script src="js/funciones.js"></script>
		<script src="js/buscador.js"></script>
		<!-- link  tabla responsiva -->
		<script src ="//cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
		<script src ="//cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

		<!-- link sin espacios -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- script para datatable -->
		<script src="//code.jquery.com/jquery-3.5.1.js"></script>
		<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bulma.min.js"></script>


		


		<!-- script sweet alert -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="js/sweetalert.js"></script>


	</body>
	
</html>	


				<!--
			</form>
					<div class="container-fluid">
					<form class="d-flex">
					<input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
					placeholder="Buscador">
					<hr>
			</form>
			//-->