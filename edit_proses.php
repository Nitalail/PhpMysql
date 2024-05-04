<?php
include 'koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$background = $_POST['background'];

$query = "UPDATE mahasiswa SET name = '$name', kelas = '$kelas', alamat = '$alamat', background = '$background' WHERE id = $id";

$hasil = mysqli_query($koneksi, $query);


if($hasil){
    header('location:index.php');
}
?>
