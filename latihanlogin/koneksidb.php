<?php
  $servernm = "localhost";
  $database = "dbperusahaan";
  $user_db = "root";
  $pass_db = "";

  //fungsi untuk mengkoreksi ke database mysql
  $koneksi_db = mysqli_connect($servernm, $user_db, $pass_db, $database);
?>