<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];
$img = $_POST['img'];
 
$query = "INSERT INTO catalogo(nombre,descripcion,precio,existencia,img) VALUES('$nombre','$descripcion','$precio','$existencia','$img')";

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: ../index.html");}
else { header("Location: error/noregistrado.html");}
 
?>