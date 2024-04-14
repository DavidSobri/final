<?php
require 'conexion.php';
//pillo todo de los contratos ordenados
$sql = "SELECT * FROM contratos order by fecha";
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
		<link rel="stylesheet" href="estiloregistrar.css">
		<link rel="stylesheet" href="estilos.css">
		<link rel="shortcut icon" href="images/logo.png">
		
		<title>Agrupación Santa Maria Magdalena</title>

<header>
	
<nav class="navbar navbar-expand-lg navbar black ">
<img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
<h1><a class="nav-link" href="panel_de_control.php">Agrupación Santa Maria Magdalena</h1></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:end;">
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
				<tr class="table-black">
						<th></th>
						<th>Proximas Actuaciones</th>
						<th></th>
						
					</tr>
					<tr class="table-primary">
						<th>Contrato</th>
						<th>Fecha</th>
						<th></th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					while ($fila = $resultado->fetch_assoc()) {
						//los imprime todos y el enlace pasa la id para ese especifico eliminar
						echo "<tr class='table'>";
						echo "<td>$fila[contrato]</td>";
						echo "<td>$fila[fecha]</td>";
						echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila[id_contrato]'>Eliminar</a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			<a class='btn btn-warning' href='registrar_contrato.php' style='font-weight:bold;'>Nuevo contrato</a>
		</div>
</body>
</html>