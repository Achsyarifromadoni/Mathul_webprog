<?php
if($_GET['aksi']== "tambah"){
?>

<div class="container">
	<h2>Input Data</h2>
	<form action="mod_pegawai/prosesadd.php" method="POST" enctype= "multipart/form-data">
	
	<div class="col-md">
			<label for="txnama">Nama Pegawai</label>
			<input type="text" name="txt_nama" id="txtnama" onivalid = "this.setCustomValidity('Nama Pegawai Wajib Diisi')"  oniput="setcustomvalidity" onchange=""/>
			
		</div>
		<div class="col-md">
			<label for="opjk">Jenis Kelamin</label>
			<input type="radio" name="opjk" value="Laki-Laki"/>Laki-Laki
            <input type="radio" name="opjk" value="Wanita"/>Perempuan
			
		</div>

        <div class="col-md">
			<label for="txdivisi">Divisi</label>
			<select name="txdivisi" class="from-select">

			<option value="">---Pilih Divisi---</option>

			<?php 
			$qdivisi = mysqli_query($koneksidb, "select * from mst_divisi");
			while($c = mysqli_fetch_array($qdivisi)){
				echo '<option value="'.$c['iddivisi'].'">'.$c['nama_divisi'].'</option>';
			}
			?>

                
            </select>
			
		</div>

		<div class="col-md">
			<label for="txjabatan">Jabatan</label>
			<input type="text" name="txjabatan" id="txjabatan" />
		</div>
		<div class="col-md">
			<label for="status">Status Pegawai</label>
			<input type="checkbox" name="stkontrak" name="stkontrak" value="Kontrak"> <label>Kontrak</label>
            <input type="checkbox" name="sttetap" name="sttetap" value="Tetap"> <label>Tetap</label>
		</div>

        <div class="col-md">
			<label for="txtgl">Tanggal Bergabung</label>
			<input type="date" name="txtgl" name="txtgl">
		</div>

        <div class="col-md">
			<label for="txalamat">Alamat</label>
			<textarea name="txalamat" id="txalamat" cols="50" rows="3"></textarea>
		</div>

        <div class="col-md">
			<label for="txfile">Uplode Foto</label>
			<input type="file" name="txfile" id="txfile">
		</div>

		<div class="col">
			<button type="submit" id="btn_simpanuser" class="button">Simpan Data</button>
		</div>
	</form>
</div>



<?php
}elseif($_GET['aksi']== "ubah"){
	// variabel untuk menampung value dari variabel user yang dikirim lewat url
	$idd = $_GET['idpegawai'];
	// $query_getdata = mysqli_query($koneksidb, "SELECT a.*, nama_divisi FROM mst_pegawai AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi where idpegawai = $id");
	$query_getdata = mysqli_query($koneksidb, "select * from mst_pegawai where idpegawai= '".$idd."'");
	$data = mysqli_fetch_array($query_getdata);
	// $divisi = $data["nama_divisi"];
?>

<!-- ubah data -->
<div class="container">
	<h2>Ubah Data</h2>
	<form action="mod_pegawai/prosesedit.php" method="POST">
	<div class="col">
	<label for="txnama">Nama Pegawai</label>
			<input type="text" name="txt_nama" id="txtnama" onivalid = "this.setCustomValidity ('Nama Wajib Diisi')" 
			Required="true" oniput="setcustomvalidity" value="<?php echo $data['nama']; ?>"/>
			

		</div>
		<div class="col-md">
            <label for="opjk">Jenis Kelamin</label>
            <input type="radio" name="opjk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="opjk" value="Wanita">Wanita
        </div>

		<div class="col-md">
            <label for="txdivisi">Divisi</label>
            <select name="txdivisi" class="form-select">
            <option value="">--Pilih Divisi--</option>
                <?php
                $qdivisi = mysqli_query($koneksi_db, "SELECT * FROM mst_divisi") or die;
                while($c = mysqli_fetch_array($qdivisi)){
                    if($c["nama_divisi"] == $divisi){
                        { $pilih = "selected"; }
                    }else{ $pilih=""; }
                    echo '<option value="'.$c["iddivisi"].'"'.$pilih.'>'.$c['nama_divisi'].'</option>';
                }
                  ?>               
            </select>
        </div>

		<div class="col-md">
			<label for="txjabatan">Jabatan</label>
			<input type="text" name="txjabatan" id="txjabatan" />
		</div>
		<div class="col-md">
			<label for="status">Status Pegawai</label>
			<input type="checkbox" name="stkontrak" name="stkontrak" value="Kontrak"> <label>Kontrak</label>
            <input type="checkbox" name="sttetap" name="sttetap" value="Tetap"> <label>Tetap</label>
		</div>

		<div class="col-md">
            <label for="txtgl">Tanggal Bergabung</label>
            <input type="date" name="txtgl" id="txtgl" value="<?= $data["tgl_masuk"]?>">
        </div>

		<div class="col-md">
            <label for="txalamat">Alamat</label>
            <textarea name="txalamat" id="txalamat" cols="50" rows="3"><?= $data["alamat"]?></textarea>
        </div>

		<div class="col-md">
            <label for="txfile">Upload Foto</label>
            <input type="file" name="txfile" id="txfile">
        </div>

		<div class="col">
			<button type="submit" id="btnsimpanuser">Simpan Data</button>
		</div>

<?php } ?>