<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="register.css">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Pesanan</title>

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

    <body>
    <style>
            body{
            background-image: url("pexels-photo-375896.jpeg");
            background-size: 100%;
            }
    </style>
      <?php
        Include("headerlogin.html");
       ?>

         	 <center>
             <legend><h1 style="font-weight=bolder; color: white;">DAFTAR PESANAN BARANG</h1></legend>
             <br>
              <table border="5" width="75%">
                <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: orange;">
                  <td>No.</td>
                  <td>Nama Barang</td>
                  <td>Jenis Barang</td>
                  <td>Jumlah</td>
                  <td>Total Harga</td>
                  <td>Alamat Pemesanan</td>
                  <td>Keterangan</td>
                </tr>
                  <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>1</td>
                    <td>Bayam</td>
                    <td>Sayuran</td>
                    <td>1</td>
                    <td>Rp.1.200,00</td>
                    <td>Prada</td>
                    <td>


                  <script type="text/javascript">

                    		function Antar() {
                              document.getElementById("tombol").value="";
                              alert("Barang akan segera diantar!!")
                          }



                  </script>
                    <button onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                </table>
              </center>

          </body>

          </html>
