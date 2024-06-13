
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
	<link rel="shortcut icon" href="images/logo.png">

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

// Selecciona el usuario de la base de datos
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' LIMIT 1";
$resultado = $mysqli->query($sql);

if ($resultado && $resultado->num_rows == 1) {
    // Obtiene la fila del usuario
    $fila = $resultado->fetch_assoc();
    
    // Verifica la contraseña
    if (password_verify($contraseña, $fila['contra'])) {
        // Contraseña correcta
        if ($fila['categoria'] == "admin") {
            header("location: panel_de_control.php");
        } else {
            // Redirige al menú del usuario
            header("location: menu_usuario.php?id={$fila['id']}");
        }
        exit(); // Termina el script después de la redirección
    } else {
        // Contraseña incorrecta
        $error_msg = "Usuario o contraseña incorrectos.";
    }
} else {
    // Usuario no encontrado
    $error_msg = "Usuario o contraseña incorrectos.";
}

// Muestra mensaje de error y vuelve al formulario de inicio de sesión
echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
echo "<h3>$error_msg</h3>";
echo "</div>";
echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
echo "<p><p><a href='index.php' class='btn btn-primary'>Volver</a></p>";
echo "</div>";

?>
</body>
</html>