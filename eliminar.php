<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="estiloregistrar.css">
		<link rel="stylesheet" href="estilos.css">
		<link rel="shortcut icon" href="images/icono.png">
		
		<title>Agrupación Santa Maria Magdalena</title>

<header>
	
<nav class="navbar navbar-expand-lg navbar black ">
<img src="images/logo.jpg" alt="grande" style="width: 50px;" class="align-self-left">
<h1><a class="nav-link" href="panel_de_control.php">Agrupación Santa Maria Magdalena</h1></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto" >
  <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
	<div class="dropdown-menu"  aria-labelledby="navbarDropdown">
	  <a class="dropdown-item" href="registrar.php">Registrar nuevo musico</a>
	  <a class="dropdown-item" href="contratos.php">Actuaciones</a>
	</div>
  </li>
</ul>
<a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
</div>
</nav>
</header>

</head>
	</head>
	<body>
	<div class="container">
		<?php
			//Establezco conexion
			require 'conexion.php';

	//Obtengo los datos introducidos en el formulario anterior 
	$id = $_GET['id'];

	//Se prepara la sentencia sql
	$sql = "DELETE FROM musico WHERE id=$id";
	//Se ejecuta la sentencia y se guarda el resultado en $resultado
	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
		echo "<p class='alert alert-primary'>Registro eliminado</p>";
	} else {
		echo "<p <p class='alert alert-danger'>Ha habido un error</p>";
	}
	


	?>
</div>
</body>

</html>