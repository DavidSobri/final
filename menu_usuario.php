<?php
require 'conexion.php';
$id = $_GET['id'];
//$id_contrato = $_GET['id_contrato'];
$sql2 = "SELECT * FROM musico where id=$id";
$resultado = $mysqli->query($sql2);
$sql = "SELECT id_contrato FROM asiste WHERE id_musico=$id";
$resultado2 = $mysqli->query($sql);

$fila = $resultado->fetch_assoc();

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
  /* Estilo para el menú desplegable en pantallas pequeñas */
  @media (max-width: 576px) {
    .navbar-black .dropdown-menu {
      background-color: grey; /* Color de fondo del menú desplegable */
    }
  }
</style>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-black">
    <img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
    <a class="nav-link" href="menu_usuario.php?id=<?php echo $id ?>">Agrupación Santa Maria Magdalena</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: grey;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="datos.php?id=<?php echo $id ?>">Mis datos</a>
            <a class="dropdown-item" href="contratos2.php?id=<?php echo $id ?>">Actuaciones</a>
          </div>
        </li>
      <li>
      <a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesión</a>
		</li>
      </ul>
    </div>
  </nav>
</header>

</head>

<body>
	<div class="d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center"
		style="width:100%">
		<div class="tabla alig-items-center " style="width:85%; margin: auto;">
			<table id="tabla" class="table table-primary " style="width:100%">
				<thead>
					<tr class="table-black">
						<th><?php echo $fila['nombre'], "  " ,$fila['apellido']; ?></th>
						<th></th>
					</tr>

					<tr class="table-primary">
						<th>Contrato aceptados</th>
						<th>Fecha</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($fila2 = $resultado2->fetch_assoc()) {
						$sql3 = "SELECT * from contratos where id_contrato=$fila2[id_contrato]";
						$resultado3 = $mysqli->query($sql3);
						$fila3 = $resultado3->fetch_assoc();
						echo "<tr>";
						echo "<td>$fila3[contrato]</td>";
						echo "<td>$fila3[fecha]</td>";


						echo "</tr>";
					}

					echo "";

					?>
				</tbody>
			</table>
		</div>
	</div>


</body>
</div>



</body>

</html>