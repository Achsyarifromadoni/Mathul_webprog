<?php 
require_once("../../koneksidb.php");

if($_GET['aksi'] == 'insert'){
    echo "Proses Tambah";
    $nm_kategori = $_POST['txt_nama'];
    $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_kategori) values('".$nm_kategori."')")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/mod_kategori/");
    }

}
else if ($_GET['aksi'] == "update"){
    echo "Proses Update";
    
}
else if ($_GET['aksi'] == "delete"){
    echo "Proses Delete";
}
?>