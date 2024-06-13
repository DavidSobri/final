<?php

require 'conexion.php';
//traigo sus datos
$id = $_POST['id'];
$sql2 = "SELECT * FROM contratos where id_contrato=$id";
$resultado2 = $mysqli->query($sql2);
$fila2=$resultado2->fetch_assoc();



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

</head>

<body>
<?php
	//ESTABLEZCO CONEXION
	require 'conexion.php';

	//obtengo los datos introducidos en el formulario anterior
	$nombre =$_POST['nombre'];
    $fecha=$_POST['fecha'];
    //modifica
    $sql = "UPDATE contratos SET contrato='$nombre', fecha='$fecha'  WHERE id_contrato=$id";
    //se ejecuta la sentencia y se gurada el resultado en resultado
    $resultado = $mysqli -> query($sql);

	if ($resultado > 0) {
		echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<h3>Datos modificados correctamente</h3><br>";
    echo "</div>";
    echo "<div class='d-flex justify-content-center mt-4'>"; // Contenedor flex para centrar y separar los botones
echo "<div class='mx-2'>"; // Espaciado horizontal entre los botones

echo "<a href='panel_de_control.php' class='btn btn-primary'>Ir al inicio</a>"; // Botón "Ir al inicio"

echo "</div>"; // Fin del primer contenedor de botón

echo "<div class='mx-2'>"; // Espaciado horizontal entre los botones

echo "<a href='contratos.php' class='btn btn-warning'>Ver actuaciones</a>"; // Botón "Ver actuaciones"

echo "</div>"; 
echo "</div>"; 
	} else {
		echo "<p class='alert alert-danger'>Ha habido un error</p>";
        echo "<p><a class='btn btn-primary' href='aceptar.php??id=$fila2[id]' >Regresar</a></p>";
	}
	


	?>

</body>

</html>