<?php
$dbhost = "localhost";
$dbuser = "id13946995_root_alex";
$dbpass = "2kKWNkMo32%a";
$dbname = "id13946995_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){die("No hay conexión:".mysqli_connect_error());}
?>