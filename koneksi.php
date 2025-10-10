<?php
$servername = "localhost";
$username = "user20232009";
$password = "Ax4Xo2";
$dbname = "user20232009";
//echo "1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
//echo "2";
?>
