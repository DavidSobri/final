<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">
        <link rel="shortcut icon" href="images/icono.png">

		<title>Agrupacion Santa Maria Magdalena</title>
	</head>
	<body>
	<header>
		
		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	  <h1 class="navbar-brand">Agrupacion Santa Maria Magdalena</h1>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="panel_de_control.php">Inicio <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Acciones
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="registrar.php">Registrar</a>
			  <a class="dropdown-item" href="#">Proximamente</a>
			</div>
		  </li>
		</ul>
		<a href="login.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
	  </div>
	</nav>
		</header>
    <?php
			//ESTABLEZCO CONEXION
			require 'conexion.php';

        //obtengo los datos introducidos en el formulario anterior
		$fecha = $_POST['fecha'];
		$entrada = $_POST['entrada'];
		$salida = $_POST['salida'];
        $id=$_POST['id'];
       
		$sql = "INSERT INTO sesiones (Fecha, Hora_de_entrada, Hora_de_salida, Id_Usuario) VALUES ('$fecha', '$entrada', '$salida', '$id')";
			
		$resultado = $mysqli -> query($sql);

		if($resultado > 0){
			echo "<p class='alert alert-primary'>Sesión agregada</p>";
		}else{
			echo "<p class='alert alert-danger'>Ha habido un error</p>";
		}
			echo "<p><a href='panel_de_control.php' class='btn btn-primary'>Volver</a></p>";
		?>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				