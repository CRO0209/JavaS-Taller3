<?php
// guardar_actividad.php

// Obtén los datos enviados desde la solicitud AJAX
$descripcion = $_POST['descripcion'];
$marca = $_POST['marca'];
$modelo= $_POST['modelo'];
$tipo= $_POST['tipo'];
$año= $_POST['año'];

// Realiza la conexión a la base de datos
$servername = "localhost";
$username = "id21559089_root";
$password = "Carlsd02..";
$dbname = "id21559089_taller3";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Inserta los datos en la base de datos
$sql = "INSERT INTO car (descripcion, marca, modelo, tipo, año) VALUES ('$descripcion', '$marca', '$modelo', '$tipo', '$año')";

if ($conn->query($sql) === TRUE) {
    echo "Registro de producto exitoso";
} else {
    echo "Error al registrar el producto: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>
