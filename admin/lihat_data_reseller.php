<?php
session_start();
if($_SESSION['login']!=1){
    header("location:../login.php");
}
?>
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
                            <a href="
                            index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                            <a href="Logout.php"><i class="fa fa-fw fa-reply"></i> Log Out</a>
                        </li>
                    </ul>
                 </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
					<table class="table table-striped">
					<h2>Data Reseller</h2>
					<thead>
						<tr>
						<th scope="col">ID</th>
						<th scope="col">Nama Reseller</th>
						<th scope="col">Alamat</th>
						<th scope="col">No.WA</th>
                        <th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if ($result) {
                            $no=1;
							while ($row = mysqli_fetch_assoc($result)) 
							{
								echo "<tr>";
								echo '<td scope="row">'.$no++."</td>";
								echo '<td scope="row">'.$row['nama_reseller']."</td>";
								echo '<td scope="row">'.$row['alamat']."</td>";
								echo '<td scope="row">'.$row['no_whatsapp']."</td>";
                                echo "<td><a href='form_edit_reseller.php?id_reseller=$row[id_reseller]'>Edit</a> | <a href='delete_reseller.php?id_reseller=$row[id_reseller]'>Delete</a></td>";                                
								echo "</tr>";
							}
						};
					?>
					</tbody>
					</table>
						<br>
						<button class="btn-primary">
						<a href="form_tambah_reseller.php" style="text-decoration: none; color: white;">Tambah Reseller</button>
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