<?php

    require 'conexion.php';
	
	$clave = $_POST['clave'];


	if($clave == null or $clave == ""){
		echo "error";
		header("Location: index.php");
	} 

	$verificar_contraseña= mysqli_query($mysqli,"SELECT *FROM claves WHERE clave='$clave'");
	if(mysqli_num_rows($verificar_contraseña)<1){
		echo'
			<script>
				alert ("contraseña incorrecta");
				window.location.href="index.php";
			</script>
			';
			exit();

	}else 
		echo '
			<script>
			$(#miModal).modal();
			</script>
			';
			





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
	<body>
		

	<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Eliminar Contacto</h4>
				</div>

				<div class="modal-body">
					¿Esta Seguro que desea eliminar este contacto?
				
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" >Cancelar</button>
						
						<a  class="btn btn-danger btn-ok">Eliminar</a>
					</div>
					</div>
				
			
				</div>
			</div>
		</div>




		<script>
			$('#miModal').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
			


		</script>	

		<script src="js/prueba.js"></script>
		
	</body>

</html>
