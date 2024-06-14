<?php
require 'conexion.php';
$sql = "Insert into intrumento ('id_instrumento', 'id_musico', 'cuerda', 'tipo') VALUES (NULL, '17', 'Bajo', '')";
	//se ejecuta la sentencia y se gurada el resultado en resultado
	$resultado = $mysqli->query($sql);
?>