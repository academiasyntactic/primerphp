<?php
include('./conexion.php');

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$email = $_POST["email"];

$sql = "INSERT INTO usuarios (contraseña, nombre, email) VALUES ('$contraseña', '$nombre', '$email')";

mysqli_query($conn, $sql);

echo "Exito";


