<?php
include "koneksi.php";

$id_transaksi = $_GET['id_transaksi'];
$sql = $pdo->prepare("DELETE FROM tb_barang_keluar WHERE id_transaksi=:id_transaksi");
$sql->bindParam(':id_transaksi', $id_transaksi);
$execute = $sql->execute();
if($execute){
    header("location: barangKeluar.php");
}else{
    echo "Data gagal dihapus. <a href='masterbarang.php'>Kembali</a>";
}
?>