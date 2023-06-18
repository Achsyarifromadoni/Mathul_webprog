<?php
if($_GET['aksi']== "tambah"){
?>

<div class="container">
	<h2>Input Data</h2>
	<form action="mod_user/prosesadd.php" method="POST">
	<div class="col-md">
			<label for="txt_user">Nama Pegawai</label>
			<input type="text" name="txt_nama" id="txt_nama" onivalid = "this.setCustomValidity('Nama Pegawai Wajib Diisi')" Required="true" oniput="setcustomvalidity" onchange=""/>
			
		</div>
		<div class="col-md">
			<label for="jk">Jenis Kelamin</label>
			<input type="radio" name="opjk" value="Laki-Laki"/>
            <input type="radio" name="opjk" value="Wanita"/>
			
		</div>

        <div class="col-md">
			<label for="tx_divisi">Divisi</label>
			<select name="txdivisi" class="from-select">
                <option value="">---Pilih Divisi---</option>
            </select>
			
		</div>

		<div class="col-md">
			<label for="txjabatan">Jabatan</label>
			<input type="text" name="txjabatan" id="txjabatan" />
		</div>
		<div class="col-md">
			<label for="txt_pasw2">Status Pegawai</label>
			<input type="checkbox" name="stkontrak" value="Kontrak"> <label>Kontrak</label>
            <input type="checkbox" name="sttetap" value="Tetap"> <label>Tetap</label>
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
			<button type="submit" class="button">Simpan Data</button>
		</div>
	</form>
</div>
<?php
}
?>
<?php
if($_GET['aksi']== "ubah"){
	$usernya = $_GET['user'];
	$query_getdata = mysqli_query($koneksidb, "select * from mst_user where username='".$usernya."'");
	$data = mysqli_fetch_array($query_getdata);
?>

<!-- ubah data -->
<div class="container">
	<h2>Ubah Data</h2>
	<form action="mod_user/prosesedit.php" method="POST">
	<div class="col">
			<label for="txt_nama">Nama</label>
			<input type="text" name="txt_nama" id="txt_nama" onivalid = "this.setCustomValidity ('Nama Wajib Diisi')" 
			Required="true" oniput="setcustomvalidity" value="<?php echo $data['nama']; ?>"/>
			

		</div>
		<div class="col">
			<label for="txt_user">Username</label>
			<input type="text" name="txt_user" id="txt_user" onivalid = "this.setCustomValidity('Username Wajib Diisi')" 
			Required="true" oniput="setcustomvalidity" value="<?php echo $data['username']; ?>" readonly/>
			
		</div>
		<div class="col">
			<label for="txt_pasw">Ganti Password</label>
			<input type="hidden" nama="pass_lama" value="<?php echo $data['password']; ?>">
			<input type="password" name="txt_pasw" id="txt_pasw" />
		</div>
		<div class="col">
			<label for="txt_pasw2">Ulangi Password</label>
			<input type="password" name="pass_lama" id="txt_pasw2" onchange="" />
		</div>
		<div class="col">
			<button type="submit" id="btnsimpanuser">Simpan Data</button>
		</div>

<?php } ?>