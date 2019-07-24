<?php 
	include 'controller/koneksi.php';

	$id_produk = $_GET['id'];

	$sql = "DELETE FROM produk WHERE id_produk='$id_produk' ";

	if (mysqli_query($conn, $sql)) {
 		echo "<script>alert('Data berhasil dihapus');location='../../index.php?halaman=produk';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>