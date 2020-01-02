<?php
	include "konek.php";

$id = $_GET['id'];

$sql = "DELETE FROM produk WHERE id_produk=$id";
$result = mysqli_query($con,$sql);

if(!$result){
    echo "<script type='text/javascript'>alert('Data Gagal Dihapus');window.location = 'lihat_produk.php';</script>";
}else{
    echo "<script type='text/javascript'>alert('Data Berhasil Dihapus');window.location = 'lihat_produk.php';</script>";
}

?>