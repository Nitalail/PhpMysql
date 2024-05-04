<?php
 include 'koneksi.php';

$id = $_POST['id'];

$query = "DELETE FROM mahasiswa WHERE id =". $id;

$sql = mysqli_query($koneksi,$query);


if($sql){
    header('location:index.php');
}

?>