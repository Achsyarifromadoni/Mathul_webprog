<?php
//ini untuk menyisipkan file koneksi,
//tanda .. / ini berarti harus keluar folder mod_user karena file ada diluar
require_once("../koneksi_db.php");
$nama = $_POST['txt_nama']; //sesuai attribut nama pada  form
$divisi = $_POST['txdivisi'];
$jabatan = $_POST['txjabatan'];
$tanggsal = $_POST['txtgl'];
$alamat = $_POST['txalamat'];
//ini untuk mendapatkan value dari radio button
//dan agar tidak muncul error ketika tidak dipilih
$status = "";
if(isset($_POST['opjk'])){
    $jk = $_POST['opjk'];
}
// else{
//     $jk = "";
// }
//ini untuk mendapatkan value dari checkbox
if(isset($_POST['stkontrak'])){
    $status = "Kontrak";
}
if(isset($_POST['sttetap'])){
    $status = "Tetap";
}
echo "</br>";
$file = $_FILES['txfile'];
echo "</hr>";
$filelama = $_POST['txfilelama'];

$cek = "";

if(empty($file['name'])){
    $data = mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai where idpegawai = $idpegawai");
        $cekdata = mysqli_fetch_array($data);
    $ft = "../filefoto".$cekdata['foto']; //
    unlink($ft);
//ini cara lain $_FILES['txfile']['name'];
echo "<br>";
$target_folder = '../filefoto/';
echo "<hr>";
echo $file['name'];
echo "<br>";
$target_file = $target_folder.$file['name'];
// echo $target_file. "<br>";
//untuk mendapatkan tipe file yang di uploud
$type_file = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
echo $type_file. "<br>";


/*buat variabel untuk menampung hasil validasi , 
apakah file boleh di uploud atau tidak, jika 1 maka boleh di uploud, 
jika 0 makan tidak dapat di uploud
*/
$boleh_uploud = 1;
/* cek batas limit file maks 1mb*/
if($file['size'] > 1000000){
    $boleh_uploud = 0;
    notif("Jangan Upload, File Kebesaran");
    // echo "Jangan Uploud, File Nya Kebesaran Gan"; 
}

if($type_file != "jpg" && $type_file != "png" && $type_file != "jpeg"){
$boleh_uploud = 0;
notif ("Jangan Uploud, Tipe File Berbahaya!!");
}

//proses uploud memindahkan file dari  local ke server
// $ceknamafile = ""; // variabel ini yang akan di simpan ke tabel database
if($boleh_uploud == 1){
    //if ini melakukan proses uploud dan sekaligus melakukan pengecekan
    if(move_uploaded_file($file['tmp_name'], $target_file)){
        notif("File Sudah Di Uploud");
        $ceknamafile = $file['name'];
        //proses insert
    }
    else{
        notif("Gagal Uploud File");
    }
    
    }
    }
else{
    // echo $file;
    echo "Ada File Lama";
    $ceknamafile = $filelama;
}

$query_update = mysqli_query($koneksi_db, "UPDATE mst_pegawai SET nama_peg='$nama', jk = '$jk', divisi ='$divisi', jabatan = '$jabatan',tgl_masuk = '$tgl',status = '$status', alamat = '$alamat', foto = '$ceknamafile' WHERE idpegawai= '$idpegawai'");
if($query_update){
    notif("Berhasil Diubah");
}
function notif($pesan){
    echo'<script language ="javascript">';
    echo 'alert("'.$pesan.'")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content = "0;url = http://localhost/matkul_repo/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
}

?>