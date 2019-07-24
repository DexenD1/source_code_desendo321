<div class="form-group">
<h5><span class="fa fa-cube"> Data Produk</span><a href="index.php?halaman=tambah_produk" class="btn btn-primary btn-sm fa fa-plus pull-right" title="Ubah Produk" data-content="Popover body content is set in this attribute."></a></h5>
</div>
<table class="table table-bordered table-stripped">
	<thead>
		<tr style="background-color: #ddd;">
			<th>No</th>
			<th>Nama Produk</th>
			<th>Warna</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Merek Produk</th>
			<th>Kategori Produk</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include 'controller/koneksi.php';
		$produk = "SELECT id_transaksi, tanggal_transaksi, total_transaksi, id_pelanggan, id_produk 
        FROM transaksi 
        INNER JOIN produk ON transaksi.id_produk = produk.id_produk
        INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan";
		$prodlap = $conn->query($produk);
		$no = 1;
		if ($prodlap->num_rows>0) {
			while($row = $prodlap->fetch_assoc()){
				echo "<tr align='center'>";
				echo "<td>".$no++."</td>";
				echo "<td>".$row['tanggal_transaksi']."</td>";
				echo "<td>".$row['total_transaksi']."</td>";
				echo "<td>".$row['jumlah']."</td>";
				echo "<td>Rp. ".number_format($row['harga'], 2)."</td>";
				echo "<td>".$row['nama_merk']."</td>";
				echo "<td>".$row['nama_kategori']."</td>";
				echo "<td><a href='index.php?halaman=ubah_produk&id=".$row['id_produk']."' class='btn btn-success btn-sm fa fa-pencil' title='Ubah Produk' data-content='Popover body content is set in this attribute.'></a>
				<a href='index.php?halaman=hapus_produk&id=".$row['id_produk']."' class='btn btn-danger btn-sm fa fa-trash' title='Hapus Produk' data-content='Popover body content is set in this attribute.'></a></td>";
				echo "</tr>";
			}
		}
		else{
			echo "<tr align='center'>";
			echo "<td colspan='8'>Tidak ada data</td>";
			echo "</tr>";
		}
		$conn->close();
		?>
	</tbody>
</table>