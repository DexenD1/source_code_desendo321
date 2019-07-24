<h1 class="display-4 text-center">Daftar Merk Produk</h1>
<hr/>
<br/>

<a class="btn btn-primary" href="index.php?halaman=tambah_merk_produk">Tambah Data</a>
<br/>
<br/>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "controller/koneksi.php";
        $query = "SELECT id_merk, nama_merk FROM merk";
        $result = mysqli_query($conn, $query);

        $num = 1;
        foreach ($result as $row) {
            ?>
            <tr>
                <td><?= $num++; ?></td>        
                <td><?= $row['nama_merk']; ?></td>        
                <td class="w-25">
                    <a class="btn btn-info btn-sm btn-warning" href="index.php?halaman=ubah_merk_produk&id=<?= $row['id_merk']; ?>">Ubah Data</a>
                    <a class="btn btn-info btn-sm bg-danger" href="index.php?halaman=hapus_merk_produk&id=<?= $row['id_merk']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>