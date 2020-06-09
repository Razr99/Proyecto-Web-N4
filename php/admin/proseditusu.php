<?php
include("../conexion.php");

$id = $_REQUEST['id'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
  
$query = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido',correo = '$correo', telefono = '$telefono' WHERE id ='$id'";

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: usuarios.php");}
else { header("Location: error/noeditusu.php");}
 
?>