<?php

include "koneksi.php";

$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori_barang'];
$stok = $_POST['stok_barang'];
$harga = $_POST['harga_barang'];

$sql = $pdo->prepare("INSERT INTO tb_masterbarang(nama_barang, kategori_barang, stok_barang, harga_barang) VALUES(:nama_barang, :kategori_barang, :stok_barang, :harga_barang)");
$sql->bindParam(':nama_barang', $nama);
$sql->bindParam(':kategori_barang', $kategori);
$sql->bindParam(':stok_barang', $stok);
$sql->bindParam(':harga_barang', $harga);
$sql->execute(); 
if($sql){
    header("location: masterbarang.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='addBarang.php'>Kembali Ke Form</a>";
}
?>