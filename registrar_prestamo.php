<?php
require 'conexion.php';
$sql = "Select * from intrumento where id_instrumento=null";
	//se ejecuta la sentencia y se gurada el resultado en resultado
	$resultado = $mysqli->query($sql);
    $fila=$resultado->fetch_assoc();

    $sql2 = "SELECT musico.*
        FROM musico
        LEFT JOIN intrumento ON musico.id = intrumento.id_musico
        WHERE intrumento.id_musico IS NULL";
$resultado2 = $mysqli->query($sql2);

if ($resultado2->num_rows > 0) {
    $musico = $resultado->fetch_assoc();
} else {
    echo "<p class='alert alert-danger'>No se encontró ningún músico con instrumento pendiente</p>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estiloregistrar.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="images/icono.png">

    <title>Agrupación Santa Maria Magdalena</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Registrar nuevo músico</h2>
                <form id="registro" name="registro" autocomplete="off" method="post" action="registrar_prestamo2.php">
                    <br>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control form-control-wide" type="text" name="nombre" maxlength="50" value="<?php echo $fila['nombre']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input class="form-control form-control-wide" type="text" name="apellido" maxlength="50" value="<?php echo $fila['apellido']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Cuerda</label>
                        <input class="form-control form-control-wide" type="number" name="cuerda" value="<?php echo $fila['cuerda']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <input class="form-control form-control-wide" type="number" name="cuerda" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-warning btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y otros scripts -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php
