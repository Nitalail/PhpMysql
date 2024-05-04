<?php
include 'koneksi.php';

if(isset($_POST['name']) && isset($_POST['kelas']) && isset($_POST['alamat']) && isset($_POST['background'])) {
    $name = $_POST['name'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $background = $_POST['background'];

    //Query Mysql
    $query = "INSERT INTO mahasiswa (name, kelas, alamat, background) VALUES ('$name', '$kelas', '$alamat', '$background')";

    $hasil = mysqli_query($koneksi, $query);

    if($hasil){
        header('location:index.php');
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Semua input harus diisi.";
}
?>
