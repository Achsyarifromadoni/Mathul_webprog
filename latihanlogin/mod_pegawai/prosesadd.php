<?php
//ini untuk menyisipkan file koneksi,
//tanda .. / ini berarti harus keluar folder mod_user karena file ada diluar
require_once("../koneksi_db.php");
// $idpegawai = $_POST['idpegawai'];
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
//start-proses uploud gambar
$file = $_FILES['txfile']; //name dari uplode foto input
var_dump($file); 
//ini untuk menampilkan output bentuk array
echo "<hr>";
//tentukan folder lokasi direktori penyimpanan file
$target_folder = "../filefoto"; //
//ini cara lain $_FILES['txfile']['name'];
echo "<hr>";
echo $file['name'].
"<hr>";
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
$ceknamafile = ""; // variabel ini yang akan di simpan ke tabel database
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




// if($boleh_uploud == 1){
//     move_uploaded_file($file['tmp_name'],$target_file);
//     notif("File Sudah Di Uploud");
// }

//end-proses uplod gambar


// //ini untuk mengecek jumlah data dari hasil query sebelumnya
// $cekdata = mysqli_num_rows($query_cekdata);
// if($cekdata > 0){
//     echo "Username Sudah Ada, Silahkan Input Kembali";
// }

$cekdata = mysqli_query($koneksidb, "INSERT INTO 
mst_pegawai(nama_peg, divisi, jabatan, tgl_masuk, status, alamat, jk, foto) values 
('".$nama."','".$divisi."','".$jabatan."','".$tanggsal."','".$status."','".$alamat."','".$tanggsal."','".$jk."','".$ceknamafile."')");

if($cekdata){
    notif ("Username sudah ada");
//proses menyimpan ke tabel
}

function notif($pesan){
    echo '<script language="Javascript"';
    echo 'alert("'.$pesan.'")';
    echo '</script>';
    //<meta http-equiv="refresh" content="0; url=">';
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Mathul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
}

    
   
    
//     if($query_simpan){
//         // ketik proses simpan berhasil
//         echo "Data Tersimpan";
//         //ini untuk mengalihkan ke halaman mod_user/index.php
//          header("Location: http://localhost/Mathul_webprog/latihanlogin/home.php?modul=mod_user");
//     }
//     else{
//         echo "Gagal Simpan";
//     }
// }


?>