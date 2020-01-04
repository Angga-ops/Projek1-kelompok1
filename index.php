<?php
session_start();
$koneksi = new mysqli("localhost","root","","siwang");
if($_SESSION['login']!=1){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Siwang Nounna Saritie</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

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
		<h1>Nounna Saritie</h1>
			<div class="row">
			<?php $ambil=$koneksi->query("SELECT * From produk");?>
			<?php while($perproduk=$ambil->fetch_assoc()){?>
			
					<div class="col-md-3">
						<div class="thumbnail" style="600px">
						<img src="img/<?php echo $perproduk['img'];?>" widht="200px">
							
							<div class="caption">
								<h3><?php echo $perproduk['nama_produk'];?></h3>
								<h5>Harga: Rp. <?php echo number_format($perproduk['harga']);?>/pcs</h5>
								<h5> Stok: <?php echo $perproduk['stok'];?>pcs</h5>
								<a href="pesan.php?id=<?php echo $perproduk['id_produk'];?>" class='btn btn-primary'>Pesan</a>	
							</div>
						</div>	
						</div>
					<?php } ?>
				</div>
</section>	
</body>
</html>