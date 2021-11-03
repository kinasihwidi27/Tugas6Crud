<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "tugaspbo";

//Menghubungkan ke database
$conn = mysqli_connect($host, $user, $pass, $database);

mysqli_select_db($conn, $database);
?>