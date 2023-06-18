<?php 
    if(!isset($_GET['aksi'])){
    ?>

    <?php
    $qdata = mysqli_query($koneksidb, "select * from mst_pegawai")
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
        <th>Tanggal Masuk</th>
        <th>Action</th>
    </tr>

    <?php 
    $no = 1;
    while ($row = mysqli_fetch_array($qdata)){
    // $tanggal = $row["tgl_masuk"];
    // $tanggalbaru = date('d-m-Y', strtotime($tanggal));
    ?>

    <tr>
        <td><?php echo "";?></td>
        <td><?php echo "";?></td>
        <td><?php echo "";?></td>
        <td><?php echo "";?></td>
        <td><?php echo "";?></td>
        <td><?php echo "";?></td>
        <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
        </td>
    </tr>

    <?php }?>

</table>
</div>

</body>
</html>
<?php } ?>
