<?php

include "koneksi.php";

$id_barang = $_GET['id_barang'];

$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori_barang'];
$stok = $_POST['stok_barang'];
$harga = $_POST['harga_barang'];

$sql = $pdo->prepare("UPDATE tb_masterbarang SET nama_barang=:nama_barang, kategori_barang=:kategori_barang, stok_barang=:stok_barang, harga_barang=:harga_barang WHERE id_barang=:id_barang");
$sql->bindParam(':nama_barang', $nama);
$sql->bindParam(':kategori_barang', $kategori);
$sql->bindParam(':stok_barang', $stok);
$sql->bindParam(':harga_barang', $harga);
$sql->bindParam(':id_barang', $id_barang);
$execute = $sql->execute();
if($execute){
    header("location: masterbarang.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='editBarang.php'>Kembali Ke Form</a>";
}
?>