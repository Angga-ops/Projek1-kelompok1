<?php
session_start();

$koneksi=new mysqli("localhost","root","","siwang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siwang Nounna Saritie</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<!-----nav------>
<nav class="navbar navbar-default">
<div class="container" >
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="keranjang.php">Keranjang</a></li>
      <li><a href="checkout.php">Checkout</a></li>
	  <li><a href="logout.php">Logout</a></li>
  </div>
</nav>
    
<section class="konten">
    <div class="container">
        <h1> Keranjang Belanja</h1>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            <?php $nomor=1; ?>
            <?php $totalbelanja=0;?>
            <?php foreach($_SESSION['keranjang'] as $id_produk=>$jumlah): ?>
            <?php $ambil=$koneksi->query("SELECT*FROM produk
            WHERE id_produk='$id_produk'");
            $pecah=$ambil->fetch_assoc();
            $total = $pecah["harga"]*$jumlah;

            ?>
                <tr>
                    <td><?php echo $nomor?>.</td>
                    <td><?php echo $pecah["nama_produk"];?></td>
                    <td>Rp. <?php echo number_format ($pecah["harga"]);?></td>
                    <td><?php echo $jumlah;?></td>
                    <td>Rp. <?php echo number_format($total);?></td>
                </tr>
                <?php $nomor++; ?>
                <?php  $totalbelanja+=$total;?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Total Belanja</th>
                    <th>Rp. <?php echo number_format($totalbelanja)?></th>
                </tr>
            </tfoot>
        </table>
        <a href=".php" class="btn btn-primary">Checkout</a>
    </div>
</section>
</body>
</html>