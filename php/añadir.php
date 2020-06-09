<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
 
$query = "INSERT INTO catalogo(nombre,descripcion,precio,existencia,img) VALUES('$nombre','$descripcion','$precio','$existencia','$img')";

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: ../servicios.php");}
else { header("Location: error/noañad.html");}
 
?>