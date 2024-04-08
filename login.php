
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrupacion Santa Maria Magdalena</title>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="estilos.css">
	<link rel="shortcut icon" href="images/logo.jpg">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Agrupacion Santa Maria Magdalena</title>



</head>
<body>
<?php
//establezco conexion y pillo los datos del formulario de index
require 'conexion.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

//se prepara y ejecuta la sentencia
$sql = "SELECT * FROM usuarios where usuario='$usuario' and contra='$contraseña' LIMIT 1";
$resultado = $mysqli->query($sql);

//se extrae el registro. no se hace en bucle porque el resultado debe ser unico
$fila = $resultado->fetch_assoc();
if ($fila){
	//si el usuario es el de david(el cual es director) ira al panel de control, el cual tiene  mas privilegios que otros usuarios
	if($usuario == "david"){
		header("location: panel_de_control.php");
	}else{
		//sino pillara los datos del usuario y guardara su id para pasarla al menu del respectivo usuario
		echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<h3>Bienvenid@ $usuario</h3><br>";
    echo "</div>";
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<p><p><a href='menu_usuario.php?id=$fila[id]' class='btn btn-primary'>Ir al inicio</a></p>";
    echo "</div>";
	}

}else{
	//si no coincide contraseña y usuario  muestra mensaje de error y vuelve a mostrar el login-index
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<h3>Usuario o contraseña incorrectos.</h3>";
    echo "</div>";
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<p><p><a href='index.php' class='btn btn-primary'>Volver</a></p>";
    echo "</div>";
} 

?>
</body>
</html>