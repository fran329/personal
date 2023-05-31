<?php
$servername = "formularioPhp";
$username = "fran"
$password = "1997";
$dbname = "formulario";

//Verificar conexiòn

$conn = mysqli("$34.28.4.124", $fran, $1997, $googlecloudformulary);

if ($conn connect_error) {
    die("error de conexion: " . $conn)
}

//formulario

$nombre = $_POST ['Nombre'];
$mail = $_POST ['Mail'];
$organizacion = $_POST ['Organizaciòn']
$localidad = $_POST ['Localidad']

//consulta SQL

$sql = "INSERT INTO formulario (Nombre, Mail, Organizaciòn) VALUES ( '$nombre', '$mail', '$organizacion', '$localidad')";

//ejecutar consola

if ($conn->query($sql) === TRUE ) {
    echo "datos guardados.";
}
else {
    "error al guardar los datos:" . $conn->error;
}

//cerrar conexion

$conn->close();