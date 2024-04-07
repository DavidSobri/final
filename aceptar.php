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
    <div class="container">
        <br><br>
        <div class="card">
            <div class="col-md-8">
                <!-- Completar atributos de form -->
                <form id="registro" name="registro" autocomplete="off" method="post" action="aceptar2.php">
                    <br>
                       <p><?php echo $fila2['nombre'] ?> va aceptar el siguiente contrato</p>
                       <p><input type="hidden" value="<?php echo $fila2['nombre']; ?>" name="nombre"></p>
                        <label type="hidden" <?php echo $fila2['nombre'] ?> ></label>
                    <div class="form-group">
                        <label>Contrato</label>
                        <select name="contrato">
                            <?php
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<option>$fila[contrato]</option>";
                            }

                            $mysqli->close();
                            ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Aceptar" class="btn btn-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>