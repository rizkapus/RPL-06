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
      <script type="text/javascript">

                        function Antar() {
                              document.getElementById("tombol").value="";
                              alert('Barang akan segera diantar!!')
                              location.replace('kurir.php');
                          }



      </script>
    <style>
            body{
            background-image: url("pexels-photo-375896.jpeg");
            background-size: 100%;
            }
    </style>
      <?php
        Include("headerkurirr.html");
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
                    <td>1 ikat</td>
                    <td>Rp.600,00</td>
                    <td>Lingke</td>
                    <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>2</td>
                    <td>Daging Sapi</td>
                    <td>Daging</td>
                    <td>2 potong </td>
                    <td>Rp.190.000,00</td>
                    <td>Beurawe</td>
                    <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>3</td>
                    <td>Wortel</td>
                    <td>Sayuran</td>
                    <td>5 buah</td>
                    <td>Rp.5.000,00</td>
                    <td>Lambhuk</td>
                     <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                  <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>4</td>
                    <td>Ayam Kampung</td>
                    <td>Ayam</td>
                    <td>4 ekor</td>
                    <td>Rp.80.000,00</td>
                    <td>Lampriet</td>
                    <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                  <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>5</td>
                    <td>Tomat</td>
                    <td>Sayuran</td>
                    <td>10 buah</td>
                    <td>Rp.10.000,00</td>
                    <td>Kuta Alam</td>
                    <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>6</td>
                    <td>Kangkung</td>
                    <td>Sayuran</td>
                    <td>5 ikat</td>
                    <td>Rp.8.000,00</td>
                    <td>Lamgugob</td>
                   <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                  <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>7</td>
                    <td>Bumbu Sachet</td>
                    <td>Bumbu</td>
                    <td>3 sachet</td>
                    <td>Rp.3.000,00</td>
                    <td>Prada</td>
                     <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                  <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>8</td>
                    <td>Mangga</td>
                    <td>Buah</td>
                    <td>12 buah</td>
                    <td>Rp.50.000,00</td>
                    <td>Lingke</td>
                     <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                  <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>9</td>
                    <td>Jeruk</td>
                    <td>Buah</td>
                    <td>20 buah</td>
                    <td>Rp.45.000,00</td>
                    <td>Lingke</td>
                   <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>10</td>
                    <td>Ikan Bandeng</td>
                    <td>Ikan</td>
                    <td>4 ekor</td>
                    <td>Rp.25.000,00</td>
                    <td>Lueng Bata</td>
                 <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>11</td>
                    <td>Ikan Gurame</td>
                    <td>Ikan</td>
                    <td>10 ekor</td>
                    <td>Rp.90.000,00</td>
                    <td>Prada</td>
                     <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>12</td>
                    <td>Bumbu Giling</td>
                    <td>Bumbu</td>
                    <td>3 plastik</td>
                    <td>Rp.7.000,00</td>
                    <td>Lingke</td>
                     <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                 <tr align="center" style="font-weight: bolder; color: black; font-size:20px; background-color: white;">
                    <td>13</td>
                    <td>Ayam Potong</td>
                    <td>Ayam</td>
                    <td>4 ekor</td>
                    <td>Rp.80.000,00</td>
                    <td>Lamlagang</td>
                     <td>
                    <button href="kurir.php" onclick="Antar()" id="tombol">Antar</button>
                    </td>
                  </tr>
                   
                  </tr>
                </table>
              </center>

          </body>

          </head>
          <?php
            Include("footer.html")
          ?>

          </html>
