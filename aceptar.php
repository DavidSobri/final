<?php
require 'conexion.php';

$id = $_GET['id'];

// Obtener el nombre del músico
$sql2 = "SELECT nombre FROM musico WHERE id = $id";
$resultado2 = $mysqli->query($sql2);
$fila2 = $resultado2->fetch_assoc();

// Consulta para obtener los contratos que aún no ha aceptado el músico
$sql = "SELECT c.contrato
        FROM contratos c
        WHERE c.contrato NOT IN (
            SELECT a.id_contrato
            FROM asiste a
            WHERE a.id_musico = $id
        )";

$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agrupación Santa Maria Magdalena</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estiloregistrar.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="images/logo.png">
    <style>
        .card-translucent {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .form-control-wide {
            width: 100%;
        }
        .btn-container {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <br><br>
    <div class="card card-translucent">
        <div class="card-body">
            <div class="col-md-8 mx-auto">
                <form id="registro" name="registro" autocomplete="off" method="post" action="aceptar2.php">
                    <h2><?php echo $fila2['nombre']; ?> aceptará el siguiente contrato</h2>
                    <input type="hidden" value="<?php echo $fila2['nombre']; ?>" name="nombre">
                    <div class="form-group">
                        <label>Contrato</label>
                        <select name="contrato" class="form-control form-control-wide">
                            <?php
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<option value='{$fila['contrato']}'>{$fila['contrato']}</option>";
                            }
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

<?php
$mysqli->close();
?>
