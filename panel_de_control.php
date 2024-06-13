<?php
//pillo los datos de la tabla ordenados
require 'conexion.php';
$sql = "SELECT * FROM musico order by cuerda";
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
	<link rel="shortcut icon" href="images/logo.png">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Agrupación Santa Maria Magdalena</title>

	<style>
  
  @media (max-width: 576px) { /* Cuando el ancho de la pantalla sea menor o igual a 576px (pantallas pequeñas) */
    .navbar-black .dropdown-menu {
      background-color: grey; /* Color de fondo del menú desplegable */
    }}
    
</style>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-black">
    <a class="navbar-brand" href="panel_de_control.php">
      <img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
      Agrupación Santa Maria Magdalena
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" style="background-color: grey;" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registrar.php">Registrar nuevo músico</a>
            <a class="dropdown-item" href="contratos.php">Actuaciones</a>
            <a class="dropdown-item" href="prestados.php">Instrumentos</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="index.php" class="nav-link logout">Cerrar Sesión</a>
        </li>
      </ul>
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
				<tr class="table-black text-center">
						<th></th>
						<th></th>
						<th></th>
						<th>Músicos en Lista</th>
						<th></th>
						<th></th>
						
					</tr>
					<tr class="table-primary text-center">
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Cuerda</th>
						<th>Instrumento Propio</th>
						<th></th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					//recorre e imprime los datos
					while ($fila = $resultado->fetch_assoc()) {
						echo "<tr class='table text-center'>";
						echo "<td>$fila[nombre]</td>";
						echo "<td>$fila[apellido]</td>";
						echo "<td>$fila[telefono]</td>";
						echo "<td>$fila[cuerda]</td>";
						echo "<td>$fila[Propiedad]</td>";
						echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila[id]'>Eliminar</a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>



</body>

</html>