<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Barang Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="static/img/inventory.png">
    <link rel="stylesheet" href="static/css/dashboard.css">
</head>

<body>
    <?php include "assets/header.html" ?>
    <?php include "assets/sidebar.html" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Laporan Barang Keluar</h1> 
        <button type="button" class="btn btn-primary"><a href="cetakBarangKeluar.php" target="_blank" style="text-decoration: none; color: white;">Cetak Data</a></button><br><br>
        <table width="100%" class="table table-striped table-hover">
            <tr>
                <th>Id Transaksi</th>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Date Time</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
                include "koneksi.php";

                $sql = $pdo->prepare("SELECT * FROM tb_barang_keluar"); 
                $sql->execute();
                while($data = $sql->fetch()){
                    echo "<tr>"; 
                    echo "<td>".$data['id_transaksi']."</td>";
                    echo "<td>".$data['id_barang']."</td>"; 
                    echo "<td>".$data['nama_barang']."</td>"; 
                    echo "<td>".$data['kategori_barang']."</td>"; 
                    echo "<td>".$data['jumlah_barang']."</td>"; 
                    echo "<td>".$data['harga_barang']."</td>";
                    echo "<td>".$data['datetime1']."</td>"; 
                    echo "</tr>"; } ?>
        </table>
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