<?php
$qdata = mysqli_query($koneksidb, "SELECT a.* , nama_divisi FROM mst_pegawai AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi")
or die("Tabel Tidak Ditemukan" .mysqli_error($koneksidb));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
        <th>Action</th>
    </tr>

    <?php 
    $no = 1;
    // $query_user = mysqli_query($koneksidb,"select * from mst_pegawai");
    while ($row = mysqli_fetch_array($qdata)){
    $tanggal = $row["tgl_masuk"];
    $tanggalbaru = date('d-m-Y', strtotime($tanggal));
    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row["nama_peg"];?></td>
        <td><?php echo $row["jk"];?></td>
        <td><?php echo $row["divisi"];?></td>
        <td><?php echo $row["status"];?></td>
        <td><img src="filefoto/<?php echo $data['foto'];?>" width="200px" height="200px"></td>
        <td><?php echo $row["tgl_masuk"];?></td>
        <td>
            <a href="?modul=mod_pegawai&aksi=ubah&id=<?php  echo $data['idpegawai']; ?>">Ubah</a>
            <a href="mod_pegawai/proses_delete.php?idpeg=<?php echo $data['idpegawai']; ?>">Hapus</a>
        </td>
    </tr>

    <?php } ?>

</table>
</div>

</body>
</html>
