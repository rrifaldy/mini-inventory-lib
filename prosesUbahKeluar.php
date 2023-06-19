<?php

include "koneksi.php";

$id_transaksi = $_GET['id_transaksi'];

$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori_barang'];
$harga = $_POST['harga_barang'];
$jumlah = $_POST['jumlah_barang'];
$datetime1 = $_POST['datetime1'];

$sql = $pdo->prepare("UPDATE tb_barang_keluar SET nama_barang=:nama_barang, kategori_barang=:kategori_barang, harga_barang=:harga_barang, jumlah_barang=:jumlah_barang, datetime1=:datetime1 WHERE id_transaksi=:id_transaksi");
$sql->bindParam(':nama_barang', $nama);
$sql->bindParam(':kategori_barang', $kategori);
$sql->bindParam(':harga_barang', $harga);
$sql->bindParam(':jumlah_barang', $jumlah);
$sql->bindParam(':datetime1', $datetime1);
$sql->bindParam(':id_transaksi', $id_transaksi);
$execute = $sql->execute();
if($execute){
    header("location: barangMasuk.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='editBarang.php'>Kembali Ke Form</a>";
}
?>