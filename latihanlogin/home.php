<?php
// require_once("koneksi_db.php");
session_start();
if(!isset($_SESSION['namalog'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hai, <?= $_SESSION['namalog']?></h2>
        <a class="btn" href="?modul=mod_user">Modul User</a>
        <a class="btn" href="?modul=mod_pegawai">Modul Pegawai</a>
    </div>
    <div class="col-md konten">
      <?php
        // if(isset($_GET["modul"])){
        //   include_once("".$_GET["modul"]."/index.php");
        // }
      ?>
    </div>
</body>
</html>