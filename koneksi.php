<?php
$server = 'localhost';
$username = 'root';
$password = '161103';
$database = 'pendaftaran';

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("Gagal terhubung: " . mysqli_connect_error());
}
?>
