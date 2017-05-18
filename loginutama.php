<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="register.css">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign In</title>

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
<style>
        body{
        background-image: url("login.jpg");
        background-size: 100%;
        }
</style>

<body>
    <?php
        include("headerlogin.html");
    ?>



<center>
	<h1>PILIH LOGIN SEBAGAI</h1>
	<div>
    <br>
    <br>
	<a href="loginpedagang.php" style="float: center;
    color: white;
    padding: 10px;
    width: 50px;
    border-radius: 5px;
    background-color: rgb(147, 8, 15);
    text-decoration: none;
    text-align: center;
    margin: 5px; ">PEDAGANG</a>
	</div>
	   <div>
       <br>
       <br>
	       <a href="index.php" style="float: center;
    color: white;
    width: 50px;
    padding: 10px;
    border-radius: 5px;
    background-color: rgb(147, 8, 15);
    text-decoration: none;
    text-align: center;
    margin: 5px; ">PEMBELI</a>
	   </div>
	       <div>
           <br>
           <br>
	           <a href="loginkurir.php" style="float: center;
    color: white;
    width: 50px;
    padding: 10px;
    border-radius: 5px;
    background-color: rgb(147, 8, 15);
    text-decoration: none;
    text-align: center;
    margin: 5px; ">KURIR</a>
	       </div>
	       </center>

    <div class="container">

        <hr>

        <?php
            include("footer.html");
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
