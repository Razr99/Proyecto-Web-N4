<?php
include("../conexion.php");

$id = $_REQUEST['id'];
  
$query = "DELETE FROM usuarios WHERE id ='$id'";

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: usuarios.php");}
else { header("Location: error/noeditusu.php");}