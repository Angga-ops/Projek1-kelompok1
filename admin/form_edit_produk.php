<?php
include "konek.php";
$query = "select * from produk";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nounna Saritie</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/kel1.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: white">

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="awal.php">Nounna Saritie</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <div>
                    <ul class="nav navbar-nav side-nav"  style="background-color: black; height: 800px;">
                        <li>
                            <a href="awal.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="lihat_data_reseller,php"><i class="fa fa-fw fa-user"></i> Informasi Reseller</a>
                        </li>
                        <li class="active">
                            <a href="lihat_produk.php"><i class="fa fa-fw fa-th-list"></i> Stok Produk</a>
                        </li>
                        <li>
                            <a href="pesanan.php"><i class="fa fa-fw fa-shopping-cart"></i> Info Pesanan</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-reply"></i> Log Out</a>
                        </li>
                    </ul>
                 </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <table class="table table-striped">
                       <?php
                        // kalau tidak ada id di query string
                        if( !isset($_GET['id_produk']) ){
                            header('Location: lihat_produk.php');
                        }

                        //ambil id dari query string
                        $id = $_GET['id_produk'];

                        // buat query untuk ambil data dari database
                        $sql = "SELECT * FROM produk WHERE id_produk='$id'";
                        $query = mysqli_query($con, $sql);
                        $produk = mysqli_fetch_assoc($query);

                        // jika data yang di-edit tidak ditemukan
                        if(mysqli_num_rows($query) < 1 ){
                            die("data tidak ditemukan...");
                        }
                        ?>
                        </div>
                        <header>
                             <h3>Formulir Edit Produk</h3>
                        </header>

                        <form action="edit_aksi_produk.php" method="POST">
                            <fieldset>
                            <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>" />
                            <div class="form-group row">
								<label class="col-12 col-sm-3 col-form-label text-sm-left">Upload Foto</label>
								<div class="col-12 col-sm-8 col-lg-6">
								<input type="file" name="img" id="img" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama Produk </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_produk" value="<?php echo $produk['nama_produk'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-sm-2 col-form-label">Harga </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga" value="<?php echo $produk['harga'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-sm-2 col-form-label">Stok </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok" value="<?php echo $produk['stok'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                <td><input type="submit" value="SIMPAN" name="upload"></td>
                                </div>
                            </div>
                            </fieldset>
                        </form>
            </div>
        </div>
        

    </div>
    
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>


    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>