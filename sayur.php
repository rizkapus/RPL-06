<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="register.css">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background: url('header-supermarket-retail.jpg') no-repeat center center;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: black; font-weight: bolder;">e-Pasar Tradisional</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" style="color: black; font-weight: bolder;">About</a>
                    </li>
                    <li>
                        <a href="#" style="color: black; font-weight: bolder;">Contact</a>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="loginutama.php" style="color: black; font-weight: bolder;">Sign In</a>
            </li>
            <li>
                <a href="registerr.php" style="color: black; font-weight: bolder;">Sign Up</a>
            </li>
        </ul>
                     

                                
        </div>
        
        <!-- /.container -->
    </nav>
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
                    <a href="#" class="list-group-item">Daging</a>
                    <a href="#" class="list-group-item">Ayam</a>
                    <a href="#" class="list-group-item">Ikan</a>
                    <a href="#" class="list-group-item">Buah-buahan</a>
                    <a href="daging.php" class="list-group-item">Daging</a>
                    <a href="ayam.php" class="list-group-item">Ayam</a>
                    <a href="ikan.php" class="list-group-item">Ikan</a>
                    <a href="buah.php" class="list-group-item">Buah-buahan</a>
                    <a href="bumbu.php" class="list-group-item">Bumbu</a>
                </div>
                </p>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img\sayuran11.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img\sayuran21.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img\sayuran31.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\wortel1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.1.000,00/buah</h4>
                                <h4><a href="#">Wortel</a>
                            <img src="img\bayam1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.6.00/ikat</h4>
                                <h4><a href="bayam.php">Bayam</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
						
						 <div class="thumbnail">
                            <img src="img\brokoli1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.5.000/buah</h4>
                                <h4><a href="#">Brokoli</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
						
						 <div class="thumbnail">
                            <img src="img\kol1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.5.000/buah</h4>
                                <h4><a href="#">Kol</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\tomat1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.1.000,00/buah</h4>
                                <h4 class="pull-right">Rp.1.000/buah</h4>
                                <h4><a href="#">Tomat</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
						
						<div class="thumbnail">
                            <img src="img\cabemerah1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.1.000/ons</h4>
                                <h4><a href="#">Cabai Merah</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
						
						<div class="thumbnail">
                            <img src="img\wortel1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.1000/buah</h4>
                                <h4><a href="#">Wortel</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\kangkung1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.500,00/ikat</h4>
                                <h4 class="pull-right">Rp.500/ikat</h4>
                                <h4><a href="#">Kangkung</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\sawi1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.700,00/ikat</h4>
                                <h4 class="pull-right">Rp.700/ikat</h4>
                                <h4><a href="#">Sawi</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
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
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\bayam1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.600,00/ikat</h4>
                                <h4><a href="bayam.php">Bayam</a>
						
						<div class="thumbnail">
                            <img src="img\bawangmerah1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Rp.10.000/ons</h4>
                                <h4><a href="#">Bawang Merah</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

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
