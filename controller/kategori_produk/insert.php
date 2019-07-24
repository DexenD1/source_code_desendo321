<?php 
	include "../koneksi.php";
	$nama_kategori = $_POST['nama_kategori'];

	$query = "INSERT INTO kategori_produk set nama_kategori='$nama_kategori'";

	mysqli_query($conn, $query);
	header('Location:../../index.php?halaman=kategori_produk');
 ?>