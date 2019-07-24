<h1 class="display-4 text-center">Ubah Merk Produk</h1>
<hr/>
<br/>

<!-- Start Form Insert -->
<?php
include "controller/koneksi.php";
$id_merk = $_GET['id'];
$query = "SELECT * FROM merk WHERE id_merk = '$id_merk'";

    //Menangkap data menggunakan variabel 'koneksi' dan 'data' berdasarkan id_merk
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<form action="controller/merk_produk/update.php" method="POST">
    <div class="form-group row">
        <label for="nama_merk" class="col-sm-3">Nama Merk Produk</label>
        <input type="hidden" name="id_merk" value="<?= $row['id_merk']; ?>">
        <input type="text" class="form-control col-sm-9" name="nama_merk" value="<?= $row['nama_merk']; ?>">
        <br/>
        <button type="submit" name="simpan" class="btn btn-success text-white">Simpan</button>
    </div>
</form>
<!-- Finish Form Insert -->