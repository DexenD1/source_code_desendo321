<?php 
include '../koneksi.php';

if (empty($_POST['password'])) {
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$username = $_POST['username'];
	$password = $_POST['password1'];

	$sql = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' WHERE id_pelanggan='$id_pelanggan' ";
}
elseif (!empty($_POST['password'])) {
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	$sql = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' WHERE id_pelanggan='$id_pelanggan' ";	
}

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Data berhasil diubah');location='../../index.php?halaman=pelanggan';</script>";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>