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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">e-Pasar Tradisional</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="loginutama.php">Sign In</a>
            </li>
            <li>
                <a href="#">Sign Up</a>
            </li>
        </ul>
                     

                                
        </div>
        

        <!-- /.container -->
    </nav>

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
<<<<<<< HEAD:visa.php
             </div>
                <div class="container">

			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Form Checkout</h3></div>
                 <div class="hero-unit">Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</div>
                
				    <form role="formku" id="formku" method="post" action="index.php">
				    <table class="table table-hover">
                    <tr>
                        <td><label for="nama">Email Address</label></td>
                        <td><input name="nama" type="email" class="required" minlength="6" id="email" size="30" /></td>
                      </tr>
				    <tr>
				        <td><label for="nama">Nama</label></td>
				        <td><input name="nama" type="text" class="required" minlength="6" id="nama" size="30" /></td>
				      </tr>
				      <tr>
				        <td><label for="alamat">Card Number</label></td>
				        <td><input name="alamat" type="text" class="required" minlength="6" id="card" size="30"/></td>
				      </tr>
                      <tr>
                        <td><label for="alamat">Expiration</label></td>
                        <td><input name="alamat" type="text" class="required" minlength="6" id="exp" size="30"/></td>
                      </tr>				      
				      <tr>
				      <td></td>
				        <td><input type="submit" value="Lanjutkan" id="submit" name="submit"  class="btn btn-sm btn-success"/>&nbsp;</td>
				        </tr>
				        <script type="text/javascript">
					    	document.getElementById("submit").onclick = function () {
					        alert("Transaski Berhasil");
    					};
						</script>
				    </table>
    			</form>
                   </div>
=======
            </div>


			<div class="col-sm-4 col-lg-4 col-md-4">
				<h1>BAYAM</h1>
				<div class="ratings">
                    <p class="pull-right">6 reviews</p>
                         <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                         </p>
                </div>
				
				<div class="col-sm-4 col-lg-4 col-md-4">
                    <img src="img\bayam1.jpg" width="300" alt="">
                       
             </div>

			</div>
			

        </div>

			<div>
				<h3 class="pull-right">Rp. 5.000/ikat</h3>
				<h1>BAYAM</h1>
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
>>>>>>> 6e38582d23c4c67b6b17fd9c32be11a70ca0a72b:bayam.php
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
                
            </div>

<<<<<<< HEAD:visa.php
            


        </div>
=======

		
>>>>>>> 6e38582d23c4c67b6b17fd9c32be11a70ca0a72b:bayam.php

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
