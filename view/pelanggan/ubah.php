<?php 
	include 'controller/koneksi.php';
	$id = $_GET['id'];
	$produk = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id_pelanggan='$id' ");
	$row = mysqli_fetch_array($produk);
?>

<form method="POST" action="controller/pelanggan/ubah.php">
	<h5><span class="fa fa-pencil"> Edit Data Pelanggan</span></h5>
	<input type="hidden" name="id_pelanggan" value="<?php echo $row['id_pelanggan']; ?>">
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $row['nama_pelanggan']; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="5"><?php echo $row['alamat']; ?></textarea>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<br>
		<input type="radio" name="jenis_kelamin" value="L" <?php if ($row['jenis_kelamin']=='L') {echo "checked";} ?>> L <input type="radio" name="jenis_kelamin" value="P" <?php if ($row['jenis_kelamin']=='P') {echo "checked";} ?>> P
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Kosongkan inputan ini jika tidak ingin merubah password!!">
		<input type="hidden" name="password1" value="<?php echo $row['password']; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success btn-sm fa fa-pencil" title="Ubah Data" data-content="Popover body content is set in this attribute."> Ubah</button>
	</div>