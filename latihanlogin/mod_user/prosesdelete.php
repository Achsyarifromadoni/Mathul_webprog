<?php
//ini untuk menyisipkan file koneksi,
//tanda .. / ini berarti harus keluar folder mod_user karena file ada diluar
require_once("../koneksi_db.php");//

if($_GET['aksi'] == 'delete'){
    echo "Proses Hapus";
    $nm_user = $_POST['txt_user'];
    $exdelete = mysqli_query($koneksidb, "UPDATE mst_user SET is_active = 0 WHERE'".$nm_user."'")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    if($exdelete){
        // ketik proses simpan berhasil
        header("Location: http://localhost/Mathul_webprog/latihanlogin/home.php?modul=mod_user");
    }

}
?>