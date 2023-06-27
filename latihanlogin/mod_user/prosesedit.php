<?php
//ini untuk menyisipkan file koneksi,
//tanda .. / ini berarti harus keluar folder mod_user karena file ada diluar
require_once("../koneksi_db.php");//
$txuser = $_POST['txt_user'];//sesuai attribut nama pada  form
$txpassbaru = ($_POST['txtpasw']);
$txnamalama = $_POST['pass_lama'];
$txnama = $_POST['txt_nama'];

$passwordnya = "";
if($txpassbaru == "" || $txpassbaru == null || empty($txnama)){
    $passwordnya = $txpasslama;
}
else{
    $passwordnya = md5($txpassbaru);
}

$query_update = mysqli_query($koneksidb, "update mst_user set nama='".$txnama."', passwordd ='".$passwordnya."' 
WHERE username = '".$txuser."' ")
or die ("gagal update" .mysqli_error($koneksidb));

if($query_update){
    // ketik proses simpan berhasil
    echo "Data Tersimpan";
    //ini untuk mengalihkan ke halaman mod_user/index.php
    //  header("Location: http://localhost/Mathul_webprog/latihanlogin/home.php?modul=mod_user");
}
else{
    echo "Gagal Simpan";
}

?>