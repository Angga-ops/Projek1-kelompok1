<?php
session_start();
if($_SESSION['login']!=1){
    header("location:../login.php");
}
?>
<?php
include "konek.php";
$query = "select * from pesanan";
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
                            <a href="
                            index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="lihat_data_reseller.php"><i class="fa fa-fw fa-user"></i> Informasi Reseller</a>
                        </li>
                        <li>
                            <a href="lihat_produk.php"><i class="fa fa-fw fa-th-list"></i> Stok Produk</a>
                        </li>
                        <li class="active">
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
					<h2>Data Pesanan</h2>
					<thead>
						<tr>
						<th scope="col">ID</th>
						<th scope="col">Nama Reseller</th>
                        <th scope="col">Nama Produk</th>
						<th scope="col">Total Bayar</th>
                        <th scope="col">Aksi</th>
						</tr>
					</thead>
					
                </div>

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