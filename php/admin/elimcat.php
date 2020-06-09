<?php
include("../conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM catalogo WHERE id ='$id'"; 

$resultado = $conn -> query($query);

if ($resultado) {  header ("Location: inventario.php");}
else { header("Location: error/noeditcat.php");}
 
?>