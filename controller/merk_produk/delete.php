<?php
    include "controller/koneksi.php";

    $id_merk = $_GET['id'];
    $query = "DELETE FROM merk WHERE id_merk = '$id_merk'";
    mysqli_query($conn, $query);

    echo "<script>alert('Data berhasil dihapus');location='../../index.php?halaman=merk_produk';</script>";
?>