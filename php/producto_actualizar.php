<?php
// Obtén los datos enviados desde la solicitud AJAX
$id = $_POST['id'];
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

// Actualiza el registro en la base de datos
$sql = "UPDATE car SET descripcion='$descripcion', marca='$marca', modelo='$modelo', tipo='$tipo', año='$año'  WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
?>