<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="login.css">
	<link rel="shortcut icon" href="images/logo.png">
	
	<title>Agrupacion Santa Maria Magdalena</title>
</head>
<style>
 body {
  position: relative; /* Add this */
  min-height: 100vh;
  background: transparent;
}

.carousel {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  margin-bottom: 20px; /* Add this to create some space */
}
  </style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="images/todos2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="images/todos3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
</div>

<!-- Incluye la biblioteca de Bootstrap JS (jQuery requerido) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>

    <div class="login">
	<div class="container">
		<div class="logo">Agrupacion Santa Maria Magdalena</div>
		<form class="form" method="POST" action="login.php">
			<input type="usuario" class="input" placeholder="Usuario" name="usuario" required>
			<input type="password" class="input" placeholder="Contraseña" name="contraseña" required>
			<button type="submit" class="button">Iniciar sesión</button>
		</form>
        </div>
	</div>
</body>

</html>