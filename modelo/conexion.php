<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-php";

// Crear una conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Establecer el conjunto de caracteres
$conexion->set_charset("utf8mb4");

?>
