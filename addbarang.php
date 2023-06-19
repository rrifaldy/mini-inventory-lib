<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Master Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="static/img/inventory.png">
    <link rel="stylesheet" href="static/css/dashboard.css">
</head>

<body>
    <?php include "assets/header.html" ?>
    <?php include "assets/sidebar.html" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Tambah Barang</h1> 
        <form method="post" action="prosesSimpan.php">
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="mb-3">
                <label for="kategoribarang" class="form-label">Kategori Barang</label>
                <input type="text" class="form-control" id="kategori_barang" name="kategori_barang">
            </div>
            <div class="mb-3">
                <label for="stokbarang" class="form-label">Stok Barang</label>
                <input type="text" class="form-control" id="stok_barang" name="stok_barang">
            </div>
            <div class="mb-3">
                <label for="hargabarang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang">
            </div>
            <button type="submit" value="Simpan" class="btn btn-primary">Submit</button>
        </form>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="static/js/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="static/js/Chart.min.js"></script>
    <script src="static/js/dashboard.js"></script>

</body>

</html>