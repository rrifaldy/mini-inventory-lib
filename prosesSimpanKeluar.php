<?php

include "koneksi.php";

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori_barang'];
$harga = $_POST['harga_barang'];
$jumlah = $_POST['jumlah_barang'];
$datetime1 = $_POST['datetime1'];

$sql = $pdo->prepare("INSERT INTO tb_barang_keluar(id_barang, nama_barang, kategori_barang, harga_barang, jumlah_barang, datetime1) VALUES(:id_barang, :nama_barang, :kategori_barang, :harga_barang, :jumlah_barang, :datetime1)");
$sql->bindParam(':id_barang', $id_barang);
$sql->bindParam(':nama_barang', $nama);
$sql->bindParam(':kategori_barang', $kategori);
$sql->bindParam(':harga_barang', $harga);
$sql->bindParam(':jumlah_barang', $jumlah);
$sql->bindParam(':datetime1', $datetime1);
$sql->execute(); 
if($sql){
    header("location: barangKeluar.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='addBarangKeluar.php'>Kembali Ke Form</a>";
}
?>