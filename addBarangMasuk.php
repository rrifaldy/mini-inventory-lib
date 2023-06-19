<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Barang Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="static/img/inventory.png">
    <link rel="stylesheet" href="static/css/dashboard.css">
</head>

<body>
    <?php include "assets/header.html" ?>
    <?php include "assets/sidebar.html" ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Tambah Barang Masuk</h1> 
        <form method="post" action="prosesSimpanMasuk.php">
            <div class="mb-3">
                <label for="idbarang" class="form-label">Id Barang</label>
                <?php   
                        $con = mysqli_connect("localhost","root","","inventaris_perpus");  
                ?>
                <select name="id_barang" id="id_barang" class="form-control" onchange='changeValue(this.value)' required>
                    <?php   
                        $query = mysqli_query($con, "select * from tb_masterbarang order by id_barang esc");  
                        $result = mysqli_query($con, "select * from tb_masterbarang");  
                        $a          = "var nama_barang = new Array();\n;";  
                        $b          = "var kategori_barang = new Array();\n;";  
                        $c          = "var harga_barang = new Array();\n;";
                        while ($row = mysqli_fetch_array($result)) {  
                            echo '<option name="id_barang" value="'.$row['id_barang'] . '">' . $row['id_barang'] . '</option>';   
                        $a .= "nama_barang['" . $row['id_barang'] . "'] = {nama_barang:'" . addslashes($row['nama_barang'])."'};\n";  
                        $b .= "kategori_barang['" . $row['id_barang'] . "'] = {kategori_barang:'" . addslashes($row['kategori_barang'])."'};\n"; 
                        $c .= "harga_barang['" . $row['id_barang'] . "'] = {harga_barang:'" . addslashes($row['harga_barang'])."'};\n";  
                        }  
                        ?>  
                </select>
            </div>
            <div class="mb-3">
                <label for="namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" readonly>
            </div>
            <div class="mb-3">
                <label for="kategoribarang" class="form-label">Kategori Barang</label>
                <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" readonly>
            </div>
            <div class="mb-3">
                <label for="hargabarang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" readonly>
            </div>
            <div class="mb-3">
                <label for="jumlahbarang" class="form-label">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang">
            </div>
            <div class="mb-3">
                <label for="datetime1" class="form-label">Date Time</label>
                <input type="date" class="form-control" id="datetime1" name="datetime1">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">   
        <?php   
            echo $a;   
            echo $b;
            echo $c; ?>  
            function changeValue(id){
            document.getElementById('nama_barang').value = nama_barang[id].nama_barang;   
            document.getElementById('kategori_barang').value = kategori_barang[id].kategori_barang;  
            document.getElementById('harga_barang').value = harga_barang[id].harga_barang;  
            };  
    </script>  
    
</body>
</html>