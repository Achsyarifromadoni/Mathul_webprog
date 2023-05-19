<?php 
require_once("../../koneksidb.php");

if($_GET['proses'] == 'insert'){
    echo "Proses Tambah";
    $katgori = $_POST['kategori'];
    $judull = $_POST['judul'];
    $isii = $_POST['isi'];
    $tgll = $_POST['tanggal'];
    // $aktiff = $_POST['isachtive'];

    if (isset($_POST['isachtive'])){
        $aktif = 1;
    }
    else{
        $aktif = 0;
    }

    echo $katgori. ",".$aktif;
    

    
    $exsave = mysqli_query($koneksidb, "insert into mst_blog(judul, gambar, isiblog, tglblog, penulis, idkategori, isactive) 
    values('".$judull."','','".$isii."','".$tgll."','','".$katgori."','".$aktif."')")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=Mod_blog");
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
    header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=Mod_blog");
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
    header("Location: http://localhost/Mathul_webprog/latihan02/Punya%20Lain/admin/home.php?modul=Mod_blog");
}
}
?>