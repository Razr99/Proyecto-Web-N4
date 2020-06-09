<?php

session_start();
session_destroy();

if (isset($_SESSION['u_correo'])){
    header("Location: cuenta.php");
}


else {
   header("Location: ../login.html");
}
?>
