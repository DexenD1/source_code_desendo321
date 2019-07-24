<?php 
	include '../koneksi.php';

	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$warna = $_POST['warna'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	$id_merk = $_POST['id_merk'];
	$id_kategori = $_POST['id_kategori'];

	$sql = "UPDATE produk SET nama_produk='$nama_produk', warna='$warna', jumlah='$jumlah', harga='$harga', id_merk='$id_merk', id_kategori='$id_kategori' WHERE id_produk='$id_produk' ";

	if (mysqli_query($conn, $sql)) {
 		echo "<script>alert('Data berhasil diubah');location='../../index.php?halaman=produk';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>