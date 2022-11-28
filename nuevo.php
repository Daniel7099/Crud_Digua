<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
	</head>
	<body>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="index.php">Inicio</a></li>
		  <li class="active">Agendar contactos</li>
		</ol>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar nuevo</h3>
			</div>
			<div class="panel-body">
            <style>
					span{
						font-size: 11.5px;
					}
                    @media (max-width: 50em) {
							span{
                                font-size: 0px;
                            }
							}
				</style>
			
			<form name="form" action="guardar.php" method="post">

					<p>
                <div class="row">

 				    <div class="col-sm-4">
                        <label for="nombre">Nombre:</label> 
                        <input type="text" id="" name="nombre" maxlength="40" placeholder="Nombre" autofocus="true" class="form-control txt_detalle" required pattern="[A-Za-z ]+" title="Los nombres tienen que ser hasta 40 digitos y solo es posible contener letras." />
                        
                        
                    </div>
                    <div class="col-lg-3">
                    <div class="form-group">
                        <span class="" id="" style="color:black;position: absolute;margin-top: 25px;"></span>
                        <div id=""></div>
                    </div>
                    </div>

			    </div>
                    </p>

					<p>
                <div class="row">
 				    <div class="col-sm-4">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" maxlength="40" placeholder="Apellido" autofocus="true" class="form-control" required pattern="[A-Za-z ]+" title="Los apellidos tienen que ser hasta 40 digitos y solo es posible contener letras." />
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
                        <input type="email" name="correo" maxlength="50" placeholder="E-Mail" class="form-control" 
                        pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="El e-mail solo puede contener letras, numeros, puntos y guiones bajos."/>
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
                        <input type="tel" id ="" name="telefono" maxlength="15" placeholder="Teléfono" class="form-control" 
                        title="El telefono tiene que ser hasta 15 digitos y solo puede contener numeros."  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required/>
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
                        <input type="tel" id ="" name="telefono2" maxlength="15"  placeholder="Telefono2" autofocus="true" class="form-control" 
                        title="El telefono2 tiene que ser hasta 15 digitos y solo puede contener numeros."oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
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
                        <input type="tel" name="celular" maxlength="15" placeholder="Celular" autofocus="true" class="form-control" 
                        title="El celular tiene que ser hasta 15 digitos y solo puede contener numeros."oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"/>
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
                        <input type="text" name="direccion" maxlength="50" placeholder="Dirección" autofocus="true" class="form-control" title="La direccion tiene que ser hasta 50 digitos.Puede contener letras, numeros, signos, guiones. puntos." />
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
                        <input type="text" name="empresa" maxlength="40" placeholder="Empresa" autofocus="true" class="form-control" 
                        title="La Empresa o Rubro tiene que ser hasta 40 digitos. Solo puede contener letras y numeros." pattern="[A-Za-z0-9]+" />
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
                        <textarea id="text-area" title="El detalle tiene que ser hasta 100 digitos. Puede contener letras, numeros, signos, guiones. puntos." 
                        style="font-family: Arial; font-size: 8pt;" type="text"name="notas" cols="47" rows="5" maxlength="100" class="form-control" placeholder="descripción"></textarea>
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
                    <input type="submit" onclick="eliminaEspacios();" name="registrar" id="btnRegistrar" value="Guardar" class="btn btn-primary"/>
					<a class="btn btn-danger" href="index.php">Cancelar</a>
				</form>
		</div>
        <!-- Script descontinuado-->
        <script src="js/app.js"></script> 
        <!-- Reemplazo de script app.js-->
        <script src="js/prueba.js"></script>
	</body>
</html>