<?php

$server 	= "localhost";
$user	= "root";
$password	= "";
$database		= "db_tiketkereta"; //sesuaikan nama databasenya
$conn = mysqli_connect($server, $user, $password, $database); //pastikan urutan pemanggilan variabel nya sama.

//untuk cek jika koneksi gagal ke database
//if(mysqli_connect_errno()) {
//	echo "Koneksi gagal : ".mysqli_connect_error();
//}
?>