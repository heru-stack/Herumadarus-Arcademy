<?php  

$host = "localhost";
$username = "root";
$password = "";
$database = "arkademy";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
	echo "Koneksi gagal " . mysqli_connect_error();
}

?>