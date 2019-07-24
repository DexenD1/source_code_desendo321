<?php
	include "../koneksi.php";
	$id_kategori = $_POST['id_kategori'];
	$nama_kategori = $_POST['nama_kategori'];

	$sql = "UPDATE kategori_produk SET nama_kategori= '$nama_kategori' WHERE id_kategori='$id_kategori'";
	mysqli_query($conn, $sql);

	header("location:../../index.php?halaman=kategori_produk");
?>