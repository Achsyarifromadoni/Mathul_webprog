<?php 
require_once("../../koneksidb.php");

if($_GET['proses'] == 'insert'){
    echo "Proses Tambah";
    $nm_kategori = $_POST['txt_nama'];
    $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_kategori) values('".$nm_kategori."')")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=Mod_kategori");
    }

}
else if ($_GET['proses'] == "update"){
    echo "Proses Update";
    $namakategori = $_GET['txt_nama'];
    $idkategori = $_POST['txt_id'];
    $exsave = mysqli_query($koneksidb,
    "UPDATE mst_kategori SET nm_kategori='$namakategori'
    WHERE id_kategori=$idkategori")
    or die ("gagal update" .mysqli_error($koneksidb));
    
    

if ($exsave){
    //Ketik Proses Simpan berhasil
    header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=Mod_kategori");
}
}

else if ($_GET['proses'] == "delete"){
    echo "Proses Delete";
    $id = $_GET['id'];
    $exsave = mysqli_query($koneksidb,
        "delete from mst_kategori WHERE id_kategori=$id")
    or die ("gagal update" .mysqli_error($koneksidb));
        
        

if ($exsave){
    //Ketik Proses Simpan berhasil
    header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=Mod_kategori");
}
}
?>