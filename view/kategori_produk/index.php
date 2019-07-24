<h1 class="display-4 text-center">Daftar Kategori Produk</h1>
<hr>
<br>

<a href="index.php?halaman=tambah_kategori_produk" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "controller/koneksi.php";

            $sql = "SELECT id_kategori, nama_kategori FROM kategori_produk";
            $result = mysqli_query($conn, $sql);
            $no=1;
            foreach ($result as $row) { ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['nama_kategori'];?></td>
                    <td>
                        <a class="btn btn btn-warning btn-sm" href="index.php?halaman=ubah_kategori_produk&id=<?php echo $row['id_kategori']; ?>">Ubah Data</a> |
                        <a class="btn btn-danger btn-sm" href="index.php?halaman=hapus_kategori_produk&id=<?php echo $row['id_kategori']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            }
        ?>
    </tbody>
</table>