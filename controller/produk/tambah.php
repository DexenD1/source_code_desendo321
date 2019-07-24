<?php 
	include '../koneksi.php'; 

	$sql = "INSERT INTO produk (nama_produk, warna, jumlah, harga, id_merk, id_kategori)
	VALUES ('".$_POST['nama_produk']."', '".$_POST['warna']."', '".$_POST['jumlah']."', '".$_POST['harga']."', '".$_POST['id_merk']."',
	 '".$_POST['id_kategori']."')";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Data berhasil ditambahkan');location='../../index.php?halaman=produk';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>