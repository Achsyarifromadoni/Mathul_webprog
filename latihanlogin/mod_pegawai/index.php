<?php
$qdata = mysqli_query($koneksidb, "SELECT a.*, nama_divisi FROM mst_pegawai AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi")
or die(mysqli_error($koneksidb));
?>
<div class="container">
   <h2>Data Pegawai</h2>
   <a href="?modul=mod_pegawai&aksi=tambah">Tambah Data</a>
   <table border="1" cellpadding='10'>
      <tr>
         <th>No</th>
         <th>Nama Pegawai</th>
         <th>Jenis Kelamin</th>
         <th>Divisi Jabatan</th>
         <th>Status</th>
         <th>Tanggal Masuk</th>
         <th>Foto</th>
         <th>Action</th>
      </tr>
      <!-- ini untuk baris yang akan menampilkan data -->
      <?php
         $nomer = 1;
         while($data = mysqli_fetch_array($qdata)){ 
         $tanggal = $data['tgl_masuk'];
         $tanggalbaru = date('d-m-Y', strtotime($tanggal));   
         // var_dump($data);
      ?>
      <tr>
         <td><?php echo $nomer++;?></td>
         <td><?php  echo $data['nama_peg']; ?></td>
         <td><?php echo $data['jk']; ?></td>
         <td><?php echo $data['nama_divisi'].",".$data['jabatan'] ; ?></td>
         <td><?php echo $data['status']; ?></td>
         <td><?php echo $tanggalbaru; ?></td>
         <td><img src="filefoto/<?php echo $data['foto'];?>" width="100px" height="100px"></td>
         <td>
            <a href="?modul=mod_pegawai&aksi=ubah&id=<?php  echo $data['idpegawai']; ?>">Ubah</a>
            <a href="mod_pegawai/proses_delete.php?idpeg=<?php echo $data['idpegawai']; ?>">Hapus</a>
         </td>
      </tr>
      <?php
        };
      ?>
   </table>
</div>