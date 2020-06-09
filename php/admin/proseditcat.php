<?php
include("../conexion.php");

$id = $_REQUEST['id'];

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];
$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
 
$query = "UPDATE catalogo SET nombre='$nombre', descripcion='$descripcion', precio='$precio', existencia='$existencia', img='$img' WHERE id ='$id'"; 

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: inventario.php");}
else { header("Location: error/noeditcat.php");}
 
?>