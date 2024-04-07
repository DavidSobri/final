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
		<link rel="shortcut icon" href="images/logo.jpg">
		
		<title>Agrupación Santa Maria Magdalena</title>

		<header>

<nav class="navbar navbar-expand-lg navbar black ">
	<img src="images/logo.jpg" alt="grande" style="width: 50px;" class="align-self-left">
	<h1><a class="nav-link" href='menu_usuario.php?id=<?php echo $id ?>'>Agrupación Santa Maria Magdalena</h1></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:end">
		<a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
	</div>
</nav>
</header>

</head>

<body>
	<?php
	//ESTABLEZCO CONEXION
	require 'conexion.php';

	//obtengo los datos introducidos en el formulario anterior
	$contrato =$_POST['contrato'];
    $nombre=$_POST['nombre'];
	
	//se prepara la sentencia sql
	$sql = "SELECT id from musico where nombre like '$nombre'";
	//se ejecuta la sentencia y se gurada el resultado en resultado
	$resultado = $mysqli->query($sql);
    $fila=$resultado->fetch_assoc();
	//se prepara la sentencia sql
	$sql2 = "SELECT id_contrato from contratos where contrato like '$contrato'";
	//se ejecuta la sentencia y se gurada el resultado en resultado
	$resultado2 = $mysqli->query($sql2);
    $fila2=$resultado2->fetch_assoc();
    $sql3="INSERT INTO asiste(id_musico,id_contrato) VALUES ('$fila[id]','$fila2[id_contrato]')";
    $resultado3 = $mysqli->query($sql3);

	if ($resultado3 > 0) {
		echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<h3>Contrato aceptado</h3><br>";
    echo "</div>";
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<p><p><a href='menu_usuario.php?id=$fila[id]' class='btn btn-primary'>Ir al inicio</a></p>";
    echo "</div>";
	} else {
		echo "<p class='alert alert-danger'>Ha habido un error</p>";
        echo "<p><a class='btn btn-primary' href='aceptar.php??id=$fila[id]' >Regresar</a></p>";
	}
	


	?>

</body>

</html>