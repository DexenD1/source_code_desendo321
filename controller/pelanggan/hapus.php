<?php 
	include 'controller/koneksi.php';

	$id_pelanggan = $_GET['id'];

	$sql = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan' ";

	if (mysqli_query($conn, $sql)) {
 		echo "<script>alert('Data berhasil dihapus');location='../../index.php?halaman=pelanggan';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>