<div class="container">
	<h1>Data User</h1>
	<a href="?modul=mod_user&aksi=tambah"> Tambah Data</a>
	<table border="1" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Action</th>
		</tr>
		<!-- ini untuk baris yg akan menampilkan data -->
		<?php 
			$nomor = 1;
			$query_user = mysqli_query($koneksidb,"select * from mst_user");
			while($data = mysqli_fetch_array($query_user))
			{		
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td>
				<a href="?modul=mod_user&aksi=ubah&user=<?php echo $data['username']; ?>">Ubah</a>
				<a href="">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>