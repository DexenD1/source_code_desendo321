<?php 
	$server	= "localhost";
	$user	= "root";
	$password	= "";
	$database	= "latihanweb";

	$db = mysqli_connect($server, $user, $password, $database);

	if (mysqli_connect_error()) {
		echo "The Connection to database is fail : ".mysqli_connect_error();
	}
	else
	{
		// echo " ";
		echo "<script>alert('Koneksi Database Berhasil Gan!!!');location='index.php';</script>";
	}
?>