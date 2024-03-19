<?php
$mysqli = new mysqli("localhost", "root", "", "banda");
    if($mysqli->connect_errno){
        echo "Fallo al conectar con MySQL: (",$mysqli->connect_errno, ") ", $mysqli->connect_errno;
    }
?>