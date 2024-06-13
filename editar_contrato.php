<?php

require 'conexion.php';
//pillo los datos por su id
$id = $_GET['id'];
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
    <style>
        .card-translucent {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro con transparencia del 80% */
            color: white; /* Asegurar que el texto sea legible sobre fondo oscuro */
        }
        .form-control-wide {
            width: 100%; /* Hacer que los input ocupen todo el ancho disponible */
        }
    </style>
    <header>

        <nav class="navbar navbar-expand-lg navbar black ">
            <img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
            <a class="nav-link" href="panel_de_control.php">Agrupación Santa Maria Magdalena</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:end">
            <a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
            </div>
        </nav>
    </header>

</head>

<body>
    <div class="container">
        <div class="card card-translucent">
        <div class="card-body">
            <div class="col-md-8 mx-auto">
                <!-- Completar atributos de form -->
                <form id="registro" name="registro" autocomplete="off" method="post" action="editar_contratos2.php">
                    <br>
                    <input type="hidden" value="<?php echo $fila2['id_contrato']; ?>" name="id">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control form-control-wide" value="<?php echo $fila2['contrato']; ?>" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="date" class="form-control form-control-wide" value="<?php echo $fila2['fecha']; ?>" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Aceptar" class="btn btn-warning btn-block">
                    </div>
                </form>
                <br>
                <div class="row justify-content-center">
                    <a href="contratos.php" class="btn btn-secondary btn-block col-md-4">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>