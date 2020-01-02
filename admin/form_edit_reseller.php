<?php
include "konek.php";
$query = "select * from data_reseller";
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
                        <li class="active">
                            <a href="lihat_data_reseller.php"><i class="fa fa-fw fa-user"></i> Informasi Reseller</a>
                        </li>
                        <li>
                            <a href="lihat_produk.php"><i class="fa fa-fw fa-th-list"></i> Stok Produk</a>
                        </li>
                        <li>
                            <a href="pesanan.php"><i class="fa fa-fw fa-shopping-cart"></i> Info Pesanan</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-reply"></i> Log Out</a>
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
                        if( !isset($_GET['id_reseller']) ){
                            header('Location: lihat_data_reseller.php');
                        }

                        //ambil id dari query string
                        $id = $_GET['id_reseller'];

                        // buat query untuk ambil data dari database
                        $sql = "SELECT * FROM data_reseller WHERE id_reseller=$id";
                        $query = mysqli_query($con, $sql);
                        $data_reseller = mysqli_fetch_assoc($query);

                        // jika data yang di-edit tidak ditemukan
                        if(mysqli_num_rows($query) < 1 ){
                            die("data tidak ditemukan...");
                        }
                        ?>
                                    
                        </div>
                        <header>
                             <h3>Formulir Edit Data Reseller</h3>
                        </header>

                        <form action="edit_aksi_reseller.php" method="POST">
                            <fieldset>
                            <input type="hidden" name="id_reseller" value="<?php echo $data_reseller['id_reseller'] ?>" />
                            <div class="form-group row">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama Reseller </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_reseller" value="<?php echo $data_reseller['nama_reseller'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $data_reseller['alamat'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputNo" class="col-sm-2 col-form-label">No.Whatsapp </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_whatsapp" value="<?php echo $data_reseller['no_whatsapp'] ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
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