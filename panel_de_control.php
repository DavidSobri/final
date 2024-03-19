<?php
require 'conexion.php';
$sql = "SELECT * FROM musico";
$resultado = $mysqli->query($sql);

?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="shortcut icon" href="images/logo.jpg">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Agrupacion Santa Maria Magdalena</title>

	<header>
		
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	<img src="images/logo.jpg" alt="grande" style="width: 35px;" class="align-self-left">
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
          <a class="dropdown-item" href="proximamente.php">Proximamente</a>
        </div>
      </li>
    </ul>
	<a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
  </div>
</nav>
	</header>

</head>

<body>
	<div class="container-fluid ">
		<!-- <div class="row">
			<a class='btn btn-primary' href='registrar.php'>Registrar</a>
		</div> -->
		<div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="width:100%">
		<div class="tabla alig-items-center " style="width:85%; margin: auto;">
			<table id="tabla" class="table table-primary " style="width:100%">
				<thead>
					<tr class="table-primary">
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Cuerda</th>
						<th>Instrumento Propio</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($fila = $resultado->fetch_assoc()) {
						echo "<tr class='table'>";
						echo "<td>$fila[nombre]</td>";
						echo "<td>$fila[apellido]</td>";
						echo "<td>$fila[telefono]</td>";
						echo "<td>$fila[cuerda]</td>";
						echo "<td>$fila[Propiedad]</td>";
						echo "<td><a class='btn btn-warning' href='actuaciones.php?id=$fila[id]'>Contratos</a></td>";
						echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila[id]'>Eliminar</a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>



</body>

</html>