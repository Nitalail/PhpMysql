<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Creat</title>
</head>
<body style="min-height:100vh;" >
<div class="container">
	<div class="d-flex align-items-center justify-content-center flex-column">
		<h1>Buat Data Mahasiswa</h1>
		<a href="index.php" class="btn btn-primary">Kembali</a>
		<div class="row w-100 mt-5">
			<div class="col-12 col-md-8 col-lg-6 mx-auto d-flex flex-column align-items-center">
			<form action="create_proses.php" method="POST" class="w-75">
    <label for="name">Nama</label>
    <input type="text" name="name" id="name" class="form-control mb-3">

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control mb-3">

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" class="form-control mb-3">

    <label for="background">Pilih Background</label>
    <select name="background" id="background" class="form-control mb-3">
        <option disabled selected>Pilih Background</option>
        <option value="bunga">Background 1</option>
        <option value="download">Background 2</option>
    </select>

    <button type="submit" class="btn btn-success">Submit</button>
</form>

		</div>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>