<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nama = $_POST['nama_reseller'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no_whatsapp'];
    

    // buat query
    $sql = "INSERT INTO data_reseller (nama_reseller, alamat, no_whatsapp) VALUE ('$nama', '$alamat', '$no')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman lihat_data_reseller.php dengan status=sukses
        header('Location: lihat_data_reseller.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman lihat_data_reseller.php dengan status=gagal
        header('Location: lihat_data_reseller.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>