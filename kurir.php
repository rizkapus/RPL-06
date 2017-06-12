<style>
    nav a:hover{
        background: rgba(255, 255, 255, 0.7) !important;
        border-radius: 100px;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-Pasar Tradisional Homepage</title>

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
        <!--<nav class="navbar navbar-inverse navbar-fixed-top" style="background: url('header333.jpg') no-repeat center center; filter: brightness(50px);" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="kurir.php" style="color: white; font-weight: bolder;">Halaman Kurir</a>			
            </div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
						<a href="loginutama.php" style="color: white; font-weight: bolder;">Logout</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>-->
	
	<?php
		include ("headerkurir.html");
	?>

	<div class="container">
		<div class="container">
			<div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\profil.jpg" alt="">
                            <div align="center"  class="caption">
                                <h4><a href="profil%20pedagang.php">Profil Pedagang</a>
                                </h4>
                            </div>
                        </div>
					</div>
					
					<div class="col-sm-4 col-lg-4 col-md-4">	
						<div class="thumbnail">
                            <img src="img\vegetables.jpg" alt="">
                            <div align="center" class="caption">
                                <h4><a href="tabelkurir.php">Daftar Pembelian</a>
                                </h4>
                            </div>
                        </div>	
                    </div>
                </div>

		
		
        <hr>

			<?php
				Include("footer.html");
			?>

		</div>
	</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
