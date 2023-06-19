<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="static/img/inventory.png">
    <link rel="stylesheet" href="static/css/dashboard.css">
</head>

<body>
    <?php include "assets/header.html" ?>
    <?php include "assets/sidebar.html" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1 class="h2" style="margin-top:20px;">About</h1>
            <br>
            <br>
            <br>
            <div class="mb-3">
            <h4>Aplikasi Inventaris Perpustakaan Sederhana</h4>
            </div>
            <div class="mb-3">
            <h4>Aplikasi ini dibuat untuk mengelola data inventaris di sebuah perpustakaan, baik itu barang maupun buku. Tersedia juga cetak laporan untuk memudahkan pengguna dalam menulis laporan 
            </h4>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="static/js/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="static/js/Chart.min.js"></script>
    <script src="static/js/dashboard.js"></script>
    <script>
        window.addEventListener('load', setTimeout(function () {
            const anim = document.querySelector('#Loader');
            anim.style.display = "none";
        }, 500));
    </script>
</body>

</html>