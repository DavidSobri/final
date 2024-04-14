<?php

 //   require 'conexion.php';
//pillo los datos de la tabla para luego  mostrarlos en el select
   /// $sql = "SELECT * FROM musico";

   // $resultado = $mysqli->query($sql);

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
		<div class="container">
			<div class="row" style="justify-content: center;">
				<h1>Registrar musico</h1>
			</div>
			<br><br>
			<div class="card">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form id="registro" name="registro" autocomplete="off" method="post" action="registrar2.php">
						<br>
						<div class="form-group">
							<label>Nombre <input class="form-control" type="text" name="nombre" maxlength="50" required></label>
						</div>

						<div class="form-group">
						<label>Apellido <input class="form-control" type="text" name="apellido" maxlength="50" required></label><br/>
                        </div>

						<div class="form-group">
						<label>Telefono <input class="form-control" type="number" name="telefono" min="600000000" max="699999999" required></label><br/>
                        </div>

						<div class="form-group">
							<label>Grupo de cuerda</label><br>
						<select name="cuerda">
        				//<?php
						//while($fila = $resultado->fetch_assoc()){
						//echo "<option>$fila[cuerda]</option>";
						//}
//
						//$mysqli->close();
						//?>
							<option>Bajo</option>
							<option>Corneta</option>
							<option>Percusión</option>
							<option>Trompeta</option>
        				</select>
						</div>

						<div class="form-group">
							<label>Instrumento en propiedad</label><br>
						<select name="propiedad">
        					<option>Si</option>
							<option>No</option>
        				</select>
                        </div>
						<br>
						<div class="form-group">
							<input type="submit" value="Registrar" class="btn btn-warning">
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