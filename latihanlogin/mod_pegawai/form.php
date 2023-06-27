<?php
if($_GET['aksi'] == "tambah"){
?>
<div class="container">
<h3>Input Data</h3>
<!-- action untuk mengarahkan ke file untuk  -->
    <form action="mod_pegawai/proses_add.php" method="post" enctype="multipart/form-data">
        <div class="col-md">
            <label for="txt_user">Nama Pegawai</label>
            <input type="text" id="txt_nama" name="txt_nama"
            oninvalid="this.setCustomValidity('Nama Wajib Diisi!!')" required="true" oninput="setCustomValidity('')">
        </div>
        <div class="col-md">
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" name="op_jk" value="wanita"> Wanita
            <input type="radio" name="op_jk" value="pria"> Pria
        </div>
        <div class="col-md">
            <label for="tx_divisi">Divisi Jabatan</label>
            <select name="tx_divisi" class="form-select">
                <option value="">-- Pilih Divisi</option>
                <?php
                    $qdivisi = mysqli_query($koneksidb, "select * from mst_divisi");
                    while($c = mysqli_fetch_array($qdivisi)){
                        echo "<option value=".$c['iddivisi'].">".$c['nama_divisi']."</option> ";
                    }
                ?>
            </select>             
        </div>
        <div class="col-md">
            <label for="tx_jabatan">Jabatan</label>
            <input type="text" id="tx_jabatan" name="tx_jabatan">
        </div>
        <div class="col-md">
            <label for="status">Status Pegawai</label>
            <input type="checkbox" name="st_kontrak" name="kontrak"> Kontrak
            <input type="checkbox" name="st_kontrak" name="tetap"> Tetap
        </div>
        <div class="col-md">
            <label for="tx_tgl">Tanggal Bergabung</label>
            <input type="date" id="tx_tgl" name="tx_tgl"> 
        </div>
        <div class="col-md">
            <label for="tx_alamat">Alamat</label>
            <textarea id="tx_alamat" name="tx_alamat" cols="50" rows="3"></textarea> 
        </div>
        <div class="col-md">
            <label for="tx_file">Upload Foto</label>
            <input type="file" id="tx_file" name="tx_file"> 
        </div>
        <div class="col-md">
            <button class="button" type="submit" id="btn_simpanuser" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>
<?php
    }elseif($_GET['aksi'] == "ubah"){
        // variabel untuk menampung value dari variabel user yang dikirim lewat url
        $usernya = $_GET['user'];
        $query_getdata = mysqli_query($koneksidb, "select * from mst_pegawai where idpegawai= '".$usernya."'");
        $data = mysqli_fetch_array($query_getdata);
?>
<div class="container">
<h3>Input Data</h3>
<!-- action untuk mengarahkan ke file untuk  -->
    <form action="mod_pegawai/proses_edit.php" method="post">
        <div class="col-md">
            <label for="txt_user">Nama Pegawai</label>
            <input type="text" id="txt_nama" name="txt_nama">
        </div>
        <div class="col-md">
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" name="op_jk"> Perempuan
            <input type="radio" name="op_jk"> Laki - Laki
        </div>
        <div class="col-md">
            <label for="txt_divisi">Divisi Jabatan</label>
            <select name="tx_divisi" class="form-select">
                <option value="">-- Pilih Divisi</option>
                <option value="1">IT</option>
                <option value="2">Accounting</option>
                <option value="3">HRD</option>
                <option value="4">Direksi</option>
            </select>             
        </div>
        <div class="col-md">
            <label for="tx_jabatan">Jabatan</label>
            <input type="text" id="tx_jabatan" name="tx_jabatan">
        </div>
        <div class="col-md">
            <label for="status">Status Pegawai</label>
            <input type="checkbox" id="st_kontrak" name="kontrak"> Kontrak
            <input type="checkbox" id="st_tetap" name="tetap"> Tetap
        </div>
        <div class="col-md">
            <label for="status">Tanggal Bergabung</label>
            <input type="date" id="tx_tgl" name="tx_tgl"> 
        </div>
        <div class="col-md">
            <label for="tx_tgl">Tanggal Bergabung</label>
            <input type="date" id="tx_tgl" name="tx_tgl"> 
        </div>
        <div class="col-md">
            <label for="tx_alamat">Alamat</label>
            <textarea id="tx_alamat" name="tx_alamat" cols="50" rows="3"></textarea> 
        </div>
        <div class="col-md">
            <label for="tx_file">Upload Foto</label>
            <input type="file" id="tx_file" name="tx_file"> 
        </div>
        <div class="col-md">
            <button class="button" type="submit" id="btn_simpanuser" name="btn_login">Simpan data</button>
        </div>
    </form>
</div>
<?php 
}
?>