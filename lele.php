<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="register.css">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beli Ikan Lele</title>

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

</head>

<body>

<body>
    <?php
        include("header.html");
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <img src="troli.png" width="100" height="70"  /> Keranjang Belanja

                <p> <div class="list-group">
                    <a href="sayur.php" class="list-group-item">Sayuran</a>
                    <a href="daging.php" class="list-group-item">Daging</a>
                    <a href="ayam.php" class="list-group-item">Ayam</a>
                    <a href="ikan.php" class="list-group-item">Ikan</a>
                    <a href="buah.php" class="list-group-item">Buah-buahan</a>
                    <a href="bumbu.php" class="list-group-item">Bumbu</a>
                </div>
                </p>
            </div>

			<div>
				<h3 class="pull-right">Rp. 23.000/kg</h3>
				<h1>LELE</h1>
					<div class="ratings">
						<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
						</p>
						<p>6 reviews</p>
					</div>
				
						<div class="col-md-4">
							<img src="img\lele.jpg" width="300" alt="">
						</div>	
						
						<div class="col-sm-4 col-lg-4 col-md-4">
							<div class="form-group">
								<label >Tentukan jumlah yang ingin dibeli:</label>
								<select class="form-control" width="50" id="sel1" onclick="jumlah()">
									<option value="0">-</option>
									<option value="1">1 kg</option>
									<option value="2">2 kg</option>
									<option value="3">3 kg</option>
									<option value="4">4 kg</option>
								</select>
								<h5>Harga yang harus di bayar: Rp. <span id="harga"></span><h5>
							</div>
							<a href="pembayaran.php" class="btn btn-info" role="button">Bayar</a>
						</div>
			</div>
			
		</div>

		

    </div>
	
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; e-Pasar Tradisional 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	 <script>
		function jumlah(){
			var harga = document.getElementById("sel1").value*23000
			document.getElementById("harga").innerHTML=harga
		}
	 </script>

</body>

</html>

  