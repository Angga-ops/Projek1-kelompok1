<?php
  
  $id_reseller = $_GET['id_reseller'];

    include "konek.php";
        //buat query
        $sql =  "DELETE FROM data_reseller where id_reseller=$id_reseller";
        $result = mysqli_query($con, $sql);

        //apakah query simpan berhasil?
       if(!$result){
            echo "<script type='text/javascript'>alert('Data Gagal Dihapus');window.location = 'lihat_data_reseller.php';</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Berhasil Dihapus');window.location = 'lihat_data_reseller.php';</script>";
        }

?>