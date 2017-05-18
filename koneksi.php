<?php
//File koneksi ke database
$servername="localhost";
$username="root";
$password="";
$dbname="coba"; //nama database

//koneksi ke host
//mysql_connect($host,$username,$password) or die("Maaf, server mati");
$conn = new mysqli($servername, $username, $password, $dbname);

//Select database
//mysql_select_db($database) or die ("Database tidak ada");

if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}
?>
