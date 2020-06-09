<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['telefono'];
 
$query = "INSERT INTO usuarios(nombre,apellido,correo,contraseña,telefono) VALUES('$nombre','$apellido','$correo','$contraseña','$telefono')";

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: ../index.html");}
else { header("Location: error/noregistrado.html");}
 
?>