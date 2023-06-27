<?php
// ini untuk menyisipkan file koneksi, 
// tanda ../ ini berarti harus keluar folder mod_user karena file ada diluarnya 
require_once("../koneksi_db.php");
// $idpeg = $_POST['idpegawai'];
$txnama= $_POST['txt_nama'];
$txdivisi = $_POST['tx_divisi'];
$txjabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";

// ini untuk mendapatkan value dari radio button 
//  dan agar tidak muncul error ketika tidak dipilih 
if(isset($_POST['op_jk'])){
    $jk = $_POST['op_jk'];
}else {
    $jk = "";
}

// ini untuk mendapatkan value dari checkbox
if(isset($_POST['st_kontrak'])){
    $status = "Kontrak";
}else {
    $status = "";
}

//Start Proses upload Gambar
$file = $_FILES['tx_file']; 
var_dump($file); //ini untuk menampilkan output bentuk array
// tentukan folder lokasi direktori penyimpanan file
echo "<hr>";
$target_folder = "../filefoto/";
// ini cara lain: $_FILES['tx_file']['name'];

// tujuan Penyimpanan file, direktori dan nama file
$target_file = $target_folder.$file["name"];
echo $target_file."<br>";

// untuk mendapatkan tipe file yang diupload
$type_file = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
echo $type_file."<br>";

// buat variabel untuk menampung hasil validasi, apakah file oleh diupload atau tidak, jika 1 maka boleh diupload, 
// jika 0 maka tidak dapat upload
$boleh_upload = 1;
// cek batas limit file maks.3MB
if($file['size'] > 1000000){
    $boleh_upload = 0;
    notif("Jangan Upload, file kebesaran");
}

// cek tipe file: 
if($type_file != "jpg" && $type_file != "png" && $type_file != "jpeg"){
    $boleh_upload = 0;
    notif("Tipe file anda berbahaya!!!");
}

//proses upload memindah file dari local ke server
$ceknamafile = ""; // variabel ini yang akan disimpan ke tabel
if($boleh_upload == 1){
    //if ini melakukan proses dan sekaligus 
    if(move_uploaded_file($file['tmp_name'], $target_file)){
        notif("File sudah diupload");
        $ceknamafile = $file['name']; 
    }else{
        notif('Gagal Upload File');
    }
    
    
}
// end proses upload gambar

function notif($pesan){
    echo '<script language = "javascript">';
    echo "alert('".$pesan."')";
    echo "</script>";
    //<meta http-quiv="refresh" content="0;url=">;
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
}

$query_cekdata = mysqli_query($koneksidb,"select * from mst_pegawai where idpegawai='".$idpeg."'");
//
$cekdata = mysqli_num_rows($query_cekdata);
if($cekdata > 0){
    echo "Username sudah ada";
}else{
    $queryupload = mysqli_query($koneksidb,"INSERT INTO mst_pegawai
    (nama_peg, divisi, jabatan, tgl_masuk, status, alamat, jk, foto) 
    VALUES('".$txnama."','".$txdivisi."','".$txjabatan."','".$tgl."','".$status."','".$alamat."','".$jk."','".$ceknamafile."')");
}
?>