<?php

    include("konek.php");

        $id = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
       
        if($_POST['upload']){
            if($_FILES['file']['name']==""){
                $query = mysqli_query($con,"update produk set nama_produk='$nama_produk', harga='$harga',stok='$stok' where id_produk='$id'");
                if($query){
                    echo "<script type='text/javascript'>alert('Data Berhasil Diubah');window.location = 'lihat_produk.php';</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Data Gagal Diubah');window.location = 'lihat_produk.php';</script>";
                }
            }else{
                $ekstensi_diperbolehkan = array('png','jpg','jpeg');
                $nama = $_FILES['file']['name'];
                $x = explode('.', $nama);
                $ekstensi = strtolower(end($x));
                $ukuran = $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];    
     
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 1044070){          
                        move_uploaded_file($file_tmp, '../user/img/'.$nama);
                        $query = mysqli_query($con,"update produk set img='$nama',nama_produk='$nama_produk', harga='$harga',stok='$stok' where id_produk='$id'");
                        if($query){
                            echo "<script type='text/javascript'>alert('Data Berhasil Disimpan');window.location = 'lihat_produk.php';</script>";
                        }else{
                            echo "<script type='text/javascript'>alert('Data Gagal Disimpan');window.location = 'lihat_produk.php';</script>";
                        }
                    }else{
                        echo "<script type='text/javascript'>alert('Ukuran File Terlalu Besar');window.location = 'lihat_produk.php';</script>";
                    }
                }else{
                    echo "<script type='text/javascript'>alert('ekstensi File Yang Di Upload Tidak Diperbolehkan');window.location = 'lihat_produk.php';</script>";
                }
            }
        }
?>