<?php

session_start();

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

include("conexion.php");

$proceso = $conn -> query("SELECT * FROM usuarios WHERE correo ='".$correo."' and contraseña = '".$contraseña."'");
    if ($resultado = mysqli_fetch_array($proceso)) {
        $_SESSION['u_correo'] = $correo;
        header("Location: cuenta.php"); }
        
    else { header("Location: error/noinicio.html"); }

?>