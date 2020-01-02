<?php

include("konek.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_reseller = $_POST['id_reseller'];
    $nama = $_POST['nama_reseller'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no_whatsapp'];
    

    // buat query update
    $sql = "UPDATE data_reseller SET nama_reseller='$nama', alamat='$alamat', no_whatsapp='$no' WHERE id_reseller=$id_reseller";
    $query = mysqli_query($con, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman lihat_data_reseller.php
        header('Location: lihat_data_reseller.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>