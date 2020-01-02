<?php
// memanggil file konek.php untuk melakukan koneksi database
include 'konek.php';

    // membuat variabel untuk menampung data dari form

  $nama_produk  = $_POST['nama_produk'];
  $harga    = $_POST['harga'];
  $stok     = $_POST['stok'];

//cek dulu jika ada gambar produk jalankan coding ini
if($_POST['tambah']) {
  $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $ukuran= $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];   
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
      move_uploaded_file($file_tmp, '../reseller/img/'.$nama);
      $query = mysqli_query($con,"insert into produk values('','$nama_produk','$nama',$harga,$stok)");
      if($query){
        echo "<script type='text/javascript'>alert('Data Berhasil Disimpan'); window.location = 'lihat_produk.php';</script>";
      }else{
        echo "<script type='text/javascript'>alert('Data Gagal Disimpan'); window.location = 'tambah_produk.php';</script>";
      }
    }else{
      echo "<script type='text/javascript'>alert('Ukuran File Terlalu Besar');window.location = 'tambah_produk.php';</script>";
    }
    }else{
    echo "<script type='text/javascript'>alert('ekstensi File Yang Di Upload Tidak Diperbolehkan');window.location = 'tambah_produk.php';</script>";
    }
}
?>
