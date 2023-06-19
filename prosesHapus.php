<?php
include "koneksi.php";

$id_barang = $_GET['id_barang'];
$sql = $pdo->prepare("DELETE FROM tb_masterbarang WHERE id_barang=:id_barang");
$sql->bindParam(':id_barang', $id_barang);
$execute = $sql->execute();
if($execute){
    header("location: masterbarang.php");
}else{
    echo "Data gagal dihapus. <a href='masterbarang.php'>Kembali</a>";
}
?>