<?php
    include "../koneksi.php";

    $merk = $_POST['nama_merk'];
    $query = "INSERT INTO merk SET nama_merk = '$merk'";

    mysqli_query($conn, $query);
    header("Location:../../index.php?halaman=merk_produk");
?>