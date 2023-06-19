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
    <table width="100%" class="table table-striped table-hover">
            <tr>
                <th>Id Transaksi</th>
                <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Date Time</th>
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
    <script>
        window.print();
    </script>
</body>

</html>