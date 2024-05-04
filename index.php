<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create</title>
</head>
<body style="min-height:100vh">
<div class="container h-100">
    <div class="d-flex align-items-center flex-column justify-content-center">
        <h2>Daftar Sekarang</h2>
        <a href="create.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
        <div class="row w-100 mt-3">
            <?php
            $query = "SELECT * FROM mahasiswa";
            $hasil = mysqli_query($koneksi, $query);

            while ($data = mysqli_fetch_assoc($hasil)) {
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
                <div class="p-3 rounded-3">
                    <div class="card">
                        <img src="asset/<?= $data['background'] ?>.jpg" alt="" class="w-100 card-img-top">
                        <div class="card-body">
                            <p class="mb-0">Nama</p>
                            <h5><?= $data['name']?></h5>

                            <p class="mb-0">Kelas</p>
                            <h5><?= $data['kelas']?></h5>

                            <p class="mb-0">Alamat</p>
                            <h5><?= $data['alamat']?></h5>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center gap-2">
                            <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
                            <form action="delete_proses.php" method="POST">
                             <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
