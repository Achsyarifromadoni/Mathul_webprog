<?php
//ini untuk menyisipkan file koneksi,
//tanda .. / ini berarti harus keluar folder mod_user karena file ada diluar
require_once("../koneksi_db.php");//
$txuser = $_POST['txt_user'];//sesuai attribut nama pada  form
$txpass = md5($_POST['txt_pasw']);
$txnama = $_POST['txt_nama'];

$query_cekdata = mysqli_query($koneksidb, "select * from mst_user where username='".$txuser."'");

//ini untuk mengecek jumlah data dari hasil query sebelumnya
$cekdata = mysqli_num_rows($query_cekdata);
if($cekdata > 0){
    echo "Username Sudah Ada, Silahkan Input Kembali";
}
else{
    //proses menyimpan ke tabel
    $query_simpan = mysqli_query($koneksidb, "insert into mst_user(username, password, is_active, nama) values('".$txuser."', '".$txpass."','1','".$txnama."')")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    
   
    
    if($query_simpan){
        // ketik proses simpan berhasil
        echo "Data Tersimpan";
        //ini untuk mengalihkan ke halaman mod_user/index.php
         header("Location: http://localhost/Mathul_webprog/latihanlogin/home.php?modul=mod_user");
    }
    else{
        echo "Gagal Simpan";
    }
}


?>