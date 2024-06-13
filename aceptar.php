<?php

require 'conexion.php';
$id = $_GET['id'];
$sql2 = "SELECT nombre FROM musico where id=$id";
$resultado2 = $mysqli->query($sql2);
$fila2=$resultado2->fetch_assoc();
$sql = "SELECT * FROM contratos";

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
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="images/logo.png">

    <title>Agrupación Santa Maria Magdalena</title>
    <style>
        .card-translucent {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro con transparencia del 80% */
            color: white; /* Asegurar que el texto sea legible sobre fondo oscuro */
            padding: 20px;
            border-radius: 10px;
        }
        .form-control-wide {
            width: 100%; /* Hacer que los input ocupen todo el ancho disponible */
        }
        .btn-container {
            margin-top: 20px; /* Espacio adicional antes del botón */
            text-align: center;
        }
    </style>
    <header>

        <nav class="navbar navbar-expand-lg navbar black ">
            <img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
            <a class="nav-link" href='menu_usuario.php?id=<?php echo $id ?>'>Agrupación Santa Maria Magdalena</a>
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
                <form id="registro" name="registro" autocomplete="off" method="post" action="aceptar2.php">
                    
                    <h2><?php echo $fila2['nombre']; ?> aceptará el siguiente contrato</h2>
                    <input type="hidden" value="<?php echo $fila2['nombre']; ?>" name="nombre">
                    <div class="form-group">
                        <label>Contrato</label>
                        <select name="contrato" class="form-control form-control-wide">
                            <?php
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<option>$fila[contrato]</option>";
                            }
                            $mysqli->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Aceptar" class="btn btn-warning btn-block">
                    </div>
                </form>
                <div class="btn-container">
                    <a href="contratos2.php?id=<?php echo $id ?>" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>