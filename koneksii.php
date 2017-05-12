<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "rpl";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ("Gagal Melakukan Koneksi ke DataBase");

			
					$nama 			= $_POST['nama'];
					$tanggal_lahir 	= $_POST['tanggal_lahir'];
					$alamat 		= $_POST['alamat'];
					$no_telepon 	= $_POST['no_telepon'];
					$username 		= $_POST['username'];
					$password 		= $_POST['password'];
					
					

				$insert = mysqli_query($koneksi, "INSERT INTO akun_pasar(nama, tanggal_lahir, alamat, no_telepon, username, password) VALUES('$nama', '$tanggal_lahir', '$alamat', '$no_telepon', $username', '$password')");


				if($insert){
					echo "data berhasil disimpan";

				}	
				else{
					echo "gagal";
				}
?>