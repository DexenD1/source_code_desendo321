<?php 
	include '../koneksi.php'; 

	$password = sha1($_POST['password']);

	$sql = "INSERT INTO pelanggan (nama_pelanggan, alamat, jenis_kelamin, username, password)
	VALUES ('".$_POST['nama_pelanggan']."', '".$_POST['alamat']."', '".$_POST['jenis_kelamin']."', '".$_POST['username']."', '".$password."')";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Data berhasil ditambahkan');location='../../index.php?halaman=pelanggan';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>