<?php 
require_once("../../koneksidb.php");

if($_GET['aksi'] == 'insert'){
    echo "Proses Tambah";
    $nomerindukmahasiswa = $_POST['nomerinduk'];
    $nama = $_POST['namaa'];
    $tempatlahir = $_POST['tempatlahirr'];
    $tanggallahir = $_POST['tanggallahirr'];
    $jurusan = $_POST['jurusan'];
    $telp = $_POST['telpp'];
    $email = $_POST['emaill'];
    $exsave = mysqli_query($koneksidb, "insert into mst_mahasiswa(Nomerindukmahasiswa,nama,tempatlahir,tanggallahir,jurusan,telp.email) values('.$nomerindukmahasiswa.','".$nama."','".$tempatlahir."','.$tanggallahir.','".$jurusan."','.$telp.','".$email."')")
    or die("Gagal Simpan" .mysqli_error($koneksidb));
    if($exsave){
        // ketik proses simpan berhasil
        header("Location: http://localhost/Mathul_webprog/Tugas03/admin/home.php?modul=mst_mahasiswa");
    }

}
else if ($_GET['aksi'] == "update"){
    echo "Proses Update";
    
}
else if ($_GET['aksi'] == "delete"){
    echo "Proses Delete";
}
?>