<?php
$servername = "34.28.4.124";
$username = "fran";
$password = "lain";
$dbname = "formulario";

// Verificar conexºxión
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$message = $_POST['message'];


// Consulta SQL
$sql = "INSERT INTO formulario  (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

// Ejecutar consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
