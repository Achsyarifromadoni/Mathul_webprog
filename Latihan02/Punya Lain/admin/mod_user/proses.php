<?php 
require_once("../../koneksidb.php");

if($_GET['proses'] == 'insert'){
    echo "Proses Tambah";
    $nm_user = $_POST['username'];
    $pass_user = $_POST['password'];
    $exsave = mysqli_query($koneksidb, "insert into mst_user(username, passwordd) values('".$nm_user."', '".$pass_user."')")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=mod_user");
    }

}
else if ($_GET['proses'] == "update"){
    echo "Proses Update";
    $namauser = $_POST['username'];
    $passuser = $_POST['password'];
    $iduser = $_POST['iduser'];
    $exsave = mysqli_query($koneksidb,
    "UPDATE mst_user SET username='$namauser', passwordd ='$passuser'
    WHERE iduser = $iduser")
    or die ("gagal update" .mysqli_error($koneksidb));
    if ($exsave){
    //Ketik Proses Simpan berhasil
    header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=mod_user");
    }
}else if ($_GET['proses'] == "delete"){
    echo "Proses Delete";
    $id = $_GET['id'];
    $exsave = mysqli_query($koneksidb,
        "delete from mst_user WHERE iduser=$id")
    or die ("Gagal Simpan" .mysqli_error($koneksidb));
        
    if ($exsave){
    //Ketik Proses Simpan berhasil
    header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=mod_user");
    }
}
?>