<?php

require 'conexion.php';
$id = $_GET['id'];
$sql2 = "SELECT * FROM musico where id=$id";
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
    <link rel="shortcut icon" href="images/icono.png">

    <title>Agrupación Santa Maria Magdalena</title>

    <header>

        <nav class="navbar navbar-expand-lg navbar black ">
            <img src="images/logo.jpg" alt="grande" style="width: 50px;" class="align-self-left">
            <h1><a class="nav-link" href="panel_de_control.php">Agrupación Santa Maria Magdalena</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="registrar.php">Registrar nuevo musico</a>
                            <a class="dropdown-item" href="contratos.php">Actuaciones</a>
                        </div>
                    </li>
                </ul>
                <a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
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
                <form id="registro" name="registro" autocomplete="off" method="post" action="datos2.php">
                    <br>
                  <input type="hidden"  value="<?php echo $fila2['id']; ?>" name="id">
                    <p>Nombre: <input type="text"  value="<?php echo $fila2['nombre']; ?>" name="nombre"></p>
                       <p>Apellido: <input type="text"  value="<?php echo $fila2['apellido']; ?>" name="apellido"></p>
                       <p>Telefono: <input type="text" value="<?php echo $fila2['telefono']; ?>" name="telefono"></p>
                       <p>Cuerda: <input type="text" readonly value="<?php echo $fila2['cuerda']; ?>" name="cuerda"></p>

                    <div class="form-group">
                        <label>Propiedad Instrumento</label>
                        <select name="propiedad" readonly>
                            <?php
                      
                                echo "<option>$fila2[Propiedad]</option>";
                         

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