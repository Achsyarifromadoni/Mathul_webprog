<?php
$qdata = mysqli_query($koneksidb, "SELECT a.*, nama_divisi FROM mst_pegawai AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi")
or die("Tabel Tidak Ditemukan" .mysqli_error($koneksidb));
?>

    
<div class="container">
<h1>Data Pegawai</h1>
<a href="?modul=mod_pegawai&aksi=tambah">Tambah Data</a>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>Divisi Jabatan</th>
        <th>Status</th>
        <th>Foto</th>
        <th>Tanggal Masuk</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>

    <?php 
    $no = 1;
    // $query_user = mysqli_query($koneksidb,"select * from mst_pegawai");
    while ($row = mysqli_fetch_array($qdata)){
    $tanggal = $row['tgl_masuk'];
    $tanggalbaru = date('d-m-Y', strtotime($tanggal));
    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row['nama_peg'];?></td>
        <td><?php echo $row['jk'];?></td>
        <td><?php echo $row['nama_divisi'].",".$row['jabatan'];?></td>
        <td><?php echo $row['status'];?></td>
        <td><img src="filefoto/<?php echo $row['foto'];?>" width="50px" height="50px"></td>
        <td><?php echo $row['tgl_masuk'];?></td>
        <td><?php echo $row['alamat'];?></td>
        <td>
            <a href="?modul=mod_pegawai&aksi=ubah&idpegawai=<?= $row["idpegawai"]?>">Ubah</a>
            <a href="mod_pegawai/prosesdelete.php?idpegawai=<?= $row['idpegawai']; ?>">Hapus</a>
        </td>

    <?php } ?>

</table>
</div>

</body>
</html>
