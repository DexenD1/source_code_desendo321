
<h1 class="display-4 text-center">Ubah Kategori Produk</h1>
<hr>
<br>
<!-- star form insert -->
<?php
include "controller/koneksi.php";
$id_kategori = $_GET["id"];
$sql = mysqli_query($conn, "SELECT * from kategori_produk where id_kategori='$id_kategori'");

$row = mysqli_fetch_array($sql);
?>

<form action="controller/kategori_produk/update.php" method="post">
    <div class="form-group row">
        <label class="col-sm-3">Nama Kategori Produk</label>
        <input type="hidden" class="form-control col-sm-9" name="id_kategori" value="<?= $row['id_kategori'];?>">
        <input type="text" class="form-control col-sm-9" name="nama_kategori" value="<?= $row['nama_kategori'];?>">

    </div>
    <button type="submit" class="btn btn-success">simpan</button>

</form>