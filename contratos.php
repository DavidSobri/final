<?php
require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="shortcut icon" href="images/icono.png">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Agrupacion Santa Maria Magdalena</title>

	<!-- <script>
		$(document).ready( function () {
			$('#tabla').DataTable();
		} );
	</script> -->
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
          <a class="dropdown-item" href="error.php">Proximamente</a>
        </div>
      </li>
    </ul>
	<a href="error.php" class="form-inline my-2 my-lg-0 nav-link">Login</a>
  </div>
</nav>
	</header>

</head>
<body>
    <div class="d-flex flex-column ">
		<h1 class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center" style="color:mediumspringgreen">OOPS! Vuelva mas tarde</h1>
		<img src="images/ups.jpg" alt="grande" style="width: 35%;" class="align-self-center align-self-xl-center align-self-lg-center align-self-md-center align-self-sm-center">
</body>
</html>