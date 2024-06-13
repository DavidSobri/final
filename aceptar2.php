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
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar black">
            <img src="images/logo.png" alt="grande" style="width: 50px;" class="align-self-left">
            <h1><a class="nav-link" href='menu_usuario.php?id=<?php echo $id ?>'>Agrupación Santa Maria Magdalena</a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:end">
                <a href="index.php" class="form-inline my-2 my-lg-0 nav-link">Cerrar Sesion</a>
            </div>
        </nav>
    </header>

    <?php
    // ESTABLEZCO CONEXION
    require 'conexion.php';

    // Obtengo los datos introducidos en el formulario anterior
    $contrato = $_POST['contrato'];
    $nombre = $_POST['nombre'];

    // Se prepara la sentencia SQL para obtener la id del músico
    $sql = "SELECT id FROM musico WHERE nombre LIKE '$nombre'";
    $resultado = $mysqli->query($sql);
    $fila = $resultado->fetch_assoc();

    // Se prepara la sentencia SQL para obtener la id del contrato
    $sql2 = "SELECT id_contrato FROM contratos WHERE contrato LIKE '$contrato'";
    $resultado2 = $mysqli->query($sql2);
    $fila2 = $resultado2->fetch_assoc();

    // Verifico si el músico ya ha aceptado este contrato
    $id_musico = $fila['id'];
    $id_contrato = $fila2['id_contrato'];
    $sql4 = "SELECT * FROM asiste WHERE id_musico = '$id_musico' AND id_contrato = '$id_contrato'";
    $resultado4 = $mysqli->query($sql4);

    if ($resultado4->num_rows > 0) {
        // El contrato ya ha sido aceptado por el músico
        echo "<div class='d-flex justify-content-center' style='width:100%'>";
        echo "<h3>Este contrato ya está aceptado, elija otro</h3><br>";
        echo "</div>";
        echo "<div class='d-flex justify-content-center' style='width:100%'>";
        echo "<p><a href='aceptar.php?id=$id_musico' class='btn btn-primary'>Volver</a></p>";
        echo "</div>";
    } else {
        // Inserto el nuevo registro en la tabla asiste
        $sql3 = "INSERT INTO asiste (id_musico, id_contrato) VALUES ('$id_musico', '$id_contrato')";
        $resultado3 = $mysqli->query($sql3);

        if ($resultado3) {
            echo "<div class='d-flex justify-content-center' style='width:100%'>";
            echo "<h3>Contrato aceptado</h3><br>";
            echo "</div>";
            echo "<div class='d-flex justify-content-center' style='width:100%'>";
            echo "<p><a href='menu_usuario.php?id=$id_musico' class='btn btn-primary'>Ir al inicio</a></p>";
            echo "</div>";
        } else {
            echo "<p class='alert alert-danger'>Ha habido un error</p>";
            echo "<p><a class='btn btn-primary' href='aceptar.php?id=$id_musico'>Regresar</a></p>";
        }
    }
    ?>
</body>
</html>
