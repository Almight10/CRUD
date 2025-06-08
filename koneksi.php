<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mobil";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
	die("Koneksi gagal : " . mysqli_connect_error());
}
$koneksi = mysqli_connect("localhost", "root", "", "mobil");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
