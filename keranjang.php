<?php
	session_start();
	?>
<?php
	include('koneksi.php');
	$query="SELECT k.Dagangan, k.email_fk, d.Harga, d.Jenis from keranjang k, dagangan d where email_fk='".$_SESSION['email']."' and k.Dagangan=d.Dagangan";
	$hasil=mysqli_query($conn,$query);
	$query2="SELECT count(Dagangan) as anis from keranjang where email_fk='".$_SESSION['email']."'";
	$hasil2=mysqli_query($conn,$query2);
	$temp=mysqli_fetch_array($hasil2);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="register.css">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Sayuran</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
	
	</script>

</head>
<body>
 <?php
        include("header.php");
    ?>
<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i>Keranjang</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">

			<!-- start: Table -->
            <div class="title"><h3>Detail Keranjang Belanja</h3></div>
			<table class="table table-hover table-condensed">
			<tr>
					<th><center>No Pembelian</center></th>
					<th><center>Nama Barang</center></th>
					<th><center>Jenis</center></th>
					<th><center>Harga Satuan</center></th>
				</tr>
				<?php
				$total = 0;
				$no=1;
				while ($row = mysqli_fetch_array($hasil)) {
				$jumlah_harga = $row['Harga'];
				$total += $jumlah_harga;
				
				?>

					<tr>
						<td><center><?php echo $no++; ?></center></td>
						<td><center><?php echo $row['Dagangan']; ?></center> </td>
						<td><center><?php echo $row['Jenis']; ?></center> </td>
						<td><center><?php echo number_format($row['Harga']); ?></center> </td>
						 
					</tr>

					<!-- echo "<table>";
					echo "<tr>";					
					echo "<td>". $row['Dagangan'] . "</td>";
					echo "<td>". $row['Jenis'] . "</td>";
					echo "<td>". $row['Harga'] . "</td>";
					echo "<tr>";
					echo "</table>"; -->
				<?php
				} ?>
				<?php
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Cart Empty!</td></tr></table>';
					echo '<p><div align="right">
						<a href="produk.php" class="btn btn-primary btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #DDD;"><td colspan="2" align="right"><b>Total Harga :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="index.php" class="btn">&laquo; CONTINUE SHOPPING</a>
						<a href="pembayaran.php?total='.$total.'" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
						</div></p>
					';
				}
				?>


				
			</table>
		<div class="container">

	

        <hr>

        <?php
            Include("footer.html");
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>			
</body>
</html>