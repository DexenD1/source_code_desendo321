<?php 
	include 'controller/koneksi.php';
	$id_kategori = $_GET['id'];
	
	$sql = "DELETE FROM kategori_produk WHERE id_kategori = '$id_kategori'";
	
	mysqli_query($conn, $sql);
	echo "<script>alert('Data berhasil dihapus');location='../../index.php?halaman=kategori_produk';</script>";
?>