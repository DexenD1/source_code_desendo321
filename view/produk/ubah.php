<?php 
	include 'controller/koneksi.php';
	$id = $_GET['id'];
	$produk = mysqli_query($conn, "SELECT id_produk, nama_produk, warna, jumlah, harga, nama_merk, nama_kategori FROM produk JOIN merk ON produk.id_merk = merk.id_merk JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori WHERE id_produk='$id' ");
	$row = mysqli_fetch_array($produk);
?>

<form method="POST" action="controller/produk/ubah.php">
	<h5><span class="fa fa-pencil"> Edit Data Produk</span></h5>
	<input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk']; ?>">
	</div>
	<div class="form-group">
		<label>Warna</label>
		<input type="text" name="warna" class="form-control" value="<?php echo $row['warna']; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah</label>
		<input type="number" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">
	</div>
	<div class="form-group">
		<label>Merek Produk</label>
		<select name="id_merk" class="form-control">
			<option value="" required>----------- Pilih -----------</option>
			<?php
			include 'controller/koneksi.php'; 
			$merk1 = "SELECT id_merk, nama_merk FROM merk";
			$merk2 = $conn->query($merk1);
			?>
			<?php foreach ($merk2 as $key => $value): ?>
				<option value="<?php echo $value['id_merk']; ?>" <?php if ($value['nama_merk']==$row['nama_merk']) { echo "selected"; } ?>><?php echo $value['nama_merk']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Kategori Produk</label>
		<select name="id_kategori" class="form-control">
			<option value="" required>----------- Pilih -----------</option>
			<?php
			include 'controller/koneksi.php'; 
			$kategori1 = "SELECT id_kategori, nama_kategori FROM kategori_produk";
			$kategori2 = $conn->query($kategori1);
			?>
			<?php foreach ($kategori2 as $key => $value): ?>
				<option value="<?php echo $value['id_kategori']; ?>" <?php if ($value['nama_kategori']==$row['nama_kategori']) { echo "selected"; } ?>><?php echo $value['nama_kategori']; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success btn-sm fa fa-pencil" title="Ubah Data" data-content="Popover body content is set in this attribute."> Ubah</button>
	</div>