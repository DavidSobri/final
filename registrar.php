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
		<link rel="stylesheet" href="estiloregistrar.css">
		<link rel="shortcut icon" href="images/icono.png">
		
		<title>Agrupacion Santa Maria Magdalena</title>
	</head>
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
	<body>
		<div class="container">
			<div class="row">
				<h1>Registrar musico</h1>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form id="registro" name="registro" autocomplete="off" method="post" action="registrar2.php">
						<div class="form-group">
							<label>Nombre <input class="form-control" type="text" name="nombre" maxlength="50" required></label>
						</div>

						<div class="form-group">
						<label>Apellido <input class="form-control" type="text" name="apellido" maxlength="50"></label><br/>
                        </div>

						<div class="form-group">
						<label>Telefono <input class="form-control" type="number" name="telefono" min ="600000000" max="699999999"></label><br/>
                        </div>

						<div class="form-group">
							<label>Grupo de cuerda</label><br>
						<select name="cuerda">
        				<?php
						while($fila = $resultado->fetch_assoc()){
						echo "<option>$fila[cuerda]</option>";
						}

						$mysqli->close();
						?>
        				</select>
						</div>

						<div class="form-group">
							<label>Instrumento en propiedad</label><br>
						<select name="propiedad">
        					<option>Si</option>
							<option>No</option>
        				</select>
                        </div>

						<div class="form-group">
							<input type="submit" value="Registrar" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				