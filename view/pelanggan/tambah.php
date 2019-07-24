<h5><span class="fa fa-plus"> Tambah Data Pelanggan</span></h5>
<form method="POST" action="controller/pelanggan/tambah.php">
	<div class="form-group" style="padding-top: 15px;">
		<label>Nama Pelanggan</label>
		<input type="text" class="form-control" name="nama_pelanggan" placeholder="Ex: Martin Guevero" required>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat" rows="5" required></textarea>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<br>
		<input type="radio" name="jenis_kelamin" value="L"> L <input type="radio" name="jenis_kelamin" value="P"> P
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Ex: Anton" required>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Ex: *********" required>
	</div>
	<div class="form-group">
		<button class="btn btn-primary fa fa-save btn-sm"> Simpan</button>
	</div>
</form>