<?php
require_once("../koneksidb.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>


</head>
<body>
<div>
<h4 class="navbar container-fluid" >DBLP3I (Database Lp3i)</h4>
    <div class="dropdown-divider"></div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
    
    
        <div class="mb-2 row">
          <div class="col-md-4"><a href="?modul=Mst_mahasiswa">Mahasiswa<i class="bi bi-arrow-down-left-square"></i></a></div>
        </div>
        <div class="dropdown-divider"></div>

        <div class="mb-2 row">
          <div class="col-md-4"><a href="?modul=mst_dosen">Dosen</a></div>
        </div>
        <div class="dropdown-divider"></div>

        <div class="mb-2 row">
          <div class="col-md-4"><a href="?modul=mst_matakuliah">Mata Kuliah</a></div>
        </div>
        <div class="dropdown-divider"></div>

        <div class="mb-2 row">
          <div class="col-md-4"><a href="?modul=tst_absensiS">Absensi</a></div>
        </div>
        <div class="dropdown-divider"></div>

        </div>
       
          
        <div class="col">

        <?php
        if(isset($_GET["modul"])){
        include_once("".$_GET["modul"]."/index.php");
        }
        ?>

          
          <!-- <div class="dropdown-divider"></div> -->
          
          
  
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>