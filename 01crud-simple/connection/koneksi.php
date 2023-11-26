<?php 
// koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_simple";
// mengconnectkan ke $conn
$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_select_db($conn, $db);
?>