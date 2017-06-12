<?php
	session_start();
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

    <title>Shop Homepage - Start Bootstrap Template</title>

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
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>
<?php 
	include("header.php");
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <img src="troli.png" width="100" height="70"  /> Keranjang Belanja
                <p> <div class="list-group">
                	<p>Metode Pembayaran</p>
                    <a href="pembayaran.php" class="list-group-item">COD</a>
                    <a href="bank.php" class="list-group-item">BANK</a>
                    <a href="visa.php" class="list-group-item">VISA</a>                    
                </div>
                </p>
             </div>
                <div class="container">

			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Form Checkout</h3></div>
                 <div class="hero-unit">Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</div>
                
				    <form role="formku" id="formku" method="post" action="index.php">
				    <table class="table table-hover">
				    <tr>
				        <td><label for="nama">Nama</label></td>
				        <td><input name="nama" type="text" class="required" minlength="6" id="nama" size="30" /></td>
				      </tr>
				      <tr>
				        <td><label for="alamat">Alamat</label></td>
				        <td><input name="alamat" type="text" class="required" minlength="6" id="alamat" size="30"/></td>
				      </tr>
				      <tr>
				        <td><label for="no_telp">No Telepon</label></td>
				        <td><input name="no_telp" type="text" class="required" minlength="6" id="no_telp" size="30" /></td>
				      </tr>
				      <tr>
				        <td><label for="username">Username</label></td>
				        <td><input name="username" type="text" class="required" id="username" size="30"/></td>
				      </tr>
				      <tr>
				        <td><label for="password">Password</label></td>
				        <td><input name="password" type="password" class="required" id="password" size="30"/></td>
				      </tr>
				      <tr>
				      <td></td>
				        <td><input type="submit" value="Lanjutkan" id="submit" name="submit"  class="btn btn-sm btn-success"/>&nbsp;</td>
				        </tr>
				        <script type="text/javascript">
					    	document.getElementById("submit").onclick = function () {
					        alert("Transaksi Berhasil");
    					};
						</script>
				    </table>
    			</form>
                   </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
                
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

</body>

</html>
