<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");
$txnama= $_POST['txt_nama'];
$txuser = $_POST['txt_user']; // sesuai atribut name pada form
$txtpass_baru = ($_POST['txt_pasw']);
$txtpass_lama = ($_POST['pass_lama']);

$passwordnya = "";
if($txtpass_baru = "" || $txtpass_baru == NULL || empty($txnama)){
    $passwordnya = $txtpass_lama;
}else{
    $passwordnya = md5($txtpass_baru);
}
$query_update = mysqli_query($koneksidb, "update mst_user set nama='".$txnama."', password='".$passwordnya."' where username='".$txuser."'");

if($query_update){
    // ketik proses simpan berhasil
    echo "Data Berhasil di Update";
    header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_user");
    //ini untuk mengalihkan ke halaman mod_user/index.php
    //  header("Location: http://localhost/Mathul_webprog/latihanlogin/home.php?modul=mod_user");
}
?>