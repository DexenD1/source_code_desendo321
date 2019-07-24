<div class="form-group">
<h5><span class="fa fa-cube"> Data Pelanggan</span><a href="index.php?halaman=tambah_pelanggan" class="btn btn-primary btn-sm fa fa-plus pull-right" title="Tambah Pelanggan" data-content="Popover body content is set in this attribute."></a></h5>
</div>
<table class="table table-bordered table-stripped">
	<thead>
		<tr align="center" style="background-color: #ddd;">
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Username</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include 'controller/koneksi.php';
		$pelanggan = "SELECT id_pelanggan, nama_pelanggan, alamat, jenis_kelamin, username FROM pelanggan";
		$prodlap = $conn->query($pelanggan);
		$no = 1;
		if ($prodlap->num_rows>0) {
			while($row = $prodlap->fetch_assoc()){
				echo "<tr align='center'>";
				echo "<td>".$no++."</td>";
				echo "<td>".$row['nama_pelanggan']."</td>";
				echo "<td>".$row['alamat']."</td>";
				echo "<td>".$row['jenis_kelamin']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>
				<a href='index.php?halaman=beli_produk&id=".$row['id_pelanggan']."' class='btn btn-info btn-sm fa fa-chart' title='Beli Produk' data-content='Popover body content is set in this attribute.'> Beli</a>
				<a href='index.php?halaman=ubah_pelanggan&id=".$row['id_pelanggan']."' class='btn btn-success btn-sm fa fa-pencil' title='Ubah Pelanggan' data-content='Popover body content is set in this attribute.'></a>
				<a href='index.php?halaman=hapus_pelanggan&id=".$row['id_pelanggan']."' class='btn btn-danger btn-sm fa fa-trash' title='Hapus Produk' data-content='Popover body content is set in this attribute.'></a></td>";
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