<?php 
    $servername = "localhost";
    $database = "db_blog";
    $user_db = "root";
    $pass_db = "";

    //fungsi untuk connect ke database mysql 
    $koneksidb = mysqli_connect($servername, $user_db, $pass_db, $database);
    if(!$koneksidb){    
        echo "Koneksi Gagal";
        exit; //Otomatis Close Koneksi
    }
    // else{
    //     echo "Koneksi Berharsil";
    // }

?>