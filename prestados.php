<?php

require 'conexion.php';
//pillo quienes no tienen el instrumento en propiedad
$sql = "SELECT * FROM musico where Propiedad like 'No'";
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

	<nav class="navbar navbar-expand-lg navbar-black">
    <a class="navbar-brand" href="panel_de_control.php">
      <img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
      Agrupación Santa Maria Magdalena
    </a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:end;">
		<a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
    </div>
    </nav>
    </header>

</head>

<body>
    <div class="container">
    <div class="container-fluid ">
		<!-- <div class="row">
			<a class='btn btn-primary' href='registrar.php'>Registrar</a>
		</div> -->
		<div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="width:100%">
		<div class="tabla alig-items-center " style="width:85%; margin: auto;">
			<table id="tabla" class="table table-primary text-center" style="width:100%">
				<thead>
				<tr class="table-black text-right">
						<th></th>
						<th></th>
						<th></th>
						<th>Músicos en Lista</th>
						<th></th>
						<th></th>
						<th></th>

					</tr>
					<tr class="table-primary">
						<th>Id Instrumento</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Cuerda</th>
						<th>Tipo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($fila = $resultado->fetch_assoc()) {
						echo "<tr class='table'>";
						//consulta para relacionar el id del musico junto al del instrumentos 
                        $sql2 = "SELECT id_instrumento, tipo from intrumento where id_musico=$fila[id]";
						$resultado2 = $mysqli->query($sql2);
						$fila2 = $resultado2->fetch_assoc();
                        echo "<td>$fila2[id_instrumento]</td>";
						echo "<td>$fila[nombre]</td>";
						echo "<td>$fila[apellido]</td>";
						echo "<td>$fila[telefono]</td>";
						echo "<td>$fila[cuerda]</td>";
						echo "<td>$fila2[tipo]</td>";
						//echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila2[id_instrumento]'>Eliminar</a>        ";
						echo "<td><a class='btn btn-primary' href='editar_prestados.php?id=$fila2[id_instrumento]'>Editar</a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
				</table>
				<!--<a class='btn btn-primary' href='registrar_prestamo.php' style='font-weight:bold;'>Registrar</a>-->        
			<a class='btn btn-warning' href='panel_de_control.php' style='font-weight:bold;'>Volver</a>
		</div>
    </div>


</body>

</html>