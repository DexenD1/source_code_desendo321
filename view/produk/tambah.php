			<!-- start form -->
			<form method="POST" action="controller/produk/tambah.php">
				<h5><span class="fa fa-plus"> Tambah Data Produk</span></h5>
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" name="nama_produk" class="form-control" placeholder="Ex: Harddisk Seagate 1 TB" required>
				</div>
				<div class="form-group">
					<label>Warna</label>
					<input type="text" name="warna" class="form-control" placeholder="Ex: White-Black" required>
				</div>
				<div class="form-group">
					<label>Jumlah</label>
					<input type="number" name="jumlah" class="form-control" placeholder="Ex: 2" required>
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="number" name="harga" class="form-control" placeholder="Ex: 10000" required>
				</div>
				<div class="form-group">
					<label>Nama Merk</label>
					<select name="id_merk" class="form-control">
						<option value="" required>----------- Pilih -----------</option>
						<?php
						include 'controller/koneksi.php'; 
						$merk1 = "SELECT id_merk, nama_merk FROM merk";
						$merk2 = $conn->query($merk1);
						if ($merk2->num_rows>0) {
							while($row1 = $merk2->fetch_array()){
								echo "<option value='".$row1['id_merk']."'>".$row1['nama_merk']."</option>";
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Kategori</label>
					<select name="id_kategori" class="form-control">
						<option value="" required>----------- Pilih -----------</option>
						<?php
						include 'controller/koneksi.php'; 
						$kategori1 = "SELECT id_kategori, nama_kategori FROM kategori_produk";
						$kategori2 = $conn->query($kategori1);
						if ($kategori2->num_rows>0) {
							while($row1 = $kategori2->fetch_array()){
								echo "<option value='".$row1['id_kategori']."'>".$row1['nama_kategori']."</option>";
							}
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary fa fa-save" name="simpan"> Simpan</button>
				</div>
			</form>