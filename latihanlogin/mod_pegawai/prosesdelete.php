<?php
require_once("../koneksi_db.php");
$hapuss = $_GET["idpegawai"];
$dataa = mysqli_query($koneksidb, "SELECT * FROM mst_pegawai where idpegawai = $hapuss");
$lihat = mysqli_fetch_array($dataa);
if(isset($hapuss)){
    $pathh = "../filefoto/".$lihat['foto'];
    unlink($pathh);
}
$query_update = mysqli_query($koneksidb, "DELETE FROM mst_pegawai where idpegawai = $hapuss");
if($query_update){
    header("Location:http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai");
}
?>