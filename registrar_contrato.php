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
    
	
        .card-translucent {
            background-color: rgba(0, 0, 0, 0.9); /* Fondo blanco con un poco de transparencia */
        }
        .form-control-wide {
            width: 100%; /* Hacer que los input ocupen todo el ancho disponible */
        }
    
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
			<br><br>
			<div class="card card-translucent">
        <div class="card-body">
            <div class="row justify-content-center">
                <h1 class="text-center">Registrar Nuevo Contrato</h1>
            </div>
            <!-- Completar atributos de form -->
            <form id="registro" name="registro" autocomplete="off" method="post" action="registrar_contrato2.php">
                <br>
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control form-control-wide" type="text" name="nombre" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label>Fecha</label>
                    <input class="form-control form-control-wide" type="date" name="fecha" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Registrar" class="btn btn-warning btn-block">
                </div>
            </form>
			<div class="row justify-content-center">
                <a href="contratos.php" class="btn btn-secondary btn-block col-md-4">Volver</a>
            </div>
        </div>
    </div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				