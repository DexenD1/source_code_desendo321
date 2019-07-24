<h1 class="display-4 text-center">Tambah Merk Produk</h1>
<hr/>
<br/>

<!-- Start Form Insert -->
<form action="controller/merk_produk/insert.php" method="POST">
    <div class="form-group row">
        <label for="nama_merk" class="col-sm-3">Nama Merk Produk</label>
        <input type="text" class="form-control col-sm-9" name="nama_merk" placeholder="Masukkan nama merk produk...">
        <br/>
        <button type="submit" name="simpan" class="btn btn-success text-white">Simpan</button>
    </div>
</form>
<!-- Finish Form Insert -->