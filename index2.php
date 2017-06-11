
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
    
     <?php
            Include("header.php");
			
        ?>

    <!-- Page Content -->
    <div class="container">

       <!-- <div class="row">-->

          <!--  <div class="col-md-3">
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
            </div>-->

            <!--<div class="col-md-9">-->

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
                                    <img class="slide-image" src="img\slide1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src=	"img\slide2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img\slide3.jpg" alt="">
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
					
                  <script type="text/javascript">

                    		function Login() {
                              document.getElementById("login").value="";
                              alert("Kamu harus login dulu kalau mau belanja!!");
                          }



                  </script>
				  
                
				
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\sayuran1.jpg" alt="">
                            <div class="caption">
                                <h4><a href=# id="login"  onclick="Login()" >Sayuran</a>
                                </h4>
                                <p>Ayo coba sayur dari disini tanpa pestisida!.</p>
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
                            <img src="img\bumbu1.jpg" alt="">
                            <div class="caption">
                                <h4><a href=# id="login" onclick="Login()" >Bumbu Dapur</a>
                                </h4>
                                <p>Bumbu-bumbuan membuat masakan jadi lebih lezat!.</p>
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
                            <img src="img\buah1.jpg" alt="">
                            <div class="caption">
                                <h4><a href=# id="login" onclick="Login()" >Buah-buahan</a>
                                </h4>
                               <p>Buah-buahan banyak mengandung vitamin dan baik untuk kesehatan.</p>
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
                            <img src="img\ikan11.jpg" alt="">
                            <div class="caption">
                                <h4><a href=# id="login" onclick="Login()" >Ikan</a>
                                </h4>
                                 <p>Ikan yang kaya akan protein yang tinggi.</p>
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
						
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img\daging1.jpg" alt="">
                            <div class="caption">
                                <h4><a href=# id="login"  onclick="Login()" >Daging</a>
                                </h4>
                               <p>Daging disini diolah dengan cara yang berkualitas.</p>
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
						
						<div class="thumbnail">
                            <img src="img\ayam1.jpg" alt="">
                            <div class="caption">
                                <h4><a href=# id="login" onclick="Login()" >Ayam</a>
                                </h4>
                                 <p>Ayam disini diolah dengan cara yang berkualitas.</p>
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

                </div>

            <!--</div>-->

      <!--  </div>-->

    </div>
	
    <!-- /.container -->

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
