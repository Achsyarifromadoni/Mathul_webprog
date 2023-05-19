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
    <title>Document</title>


</head>
<body>
<div>
<h4 class="navbar container-fluid" >Syarif</h4>
    <div class="dropdown-divider"></div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
    
    
          <div class="mb-2 row">
            <div class="col-md-4"><a href="?modul=Mod_kategori">Data Kategori</a></div>
          </div>
          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4"><a href="?modul=Mod_blog">Data Blog</a></div>
          </div>
          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4"><a href="?modul=Mod_user">Data User</a></div>
          </div>
          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4"><a href="">Data Menu</a></div>
          </div>
          <div class="dropdown-divider"></div>

        </div>
       
          
        <div class="col-md-7">

        <?php
        if(isset($_GET["modul"])){
        include_once("".$_GET["modul"]."/index.php");
        }
        ?>

            <!-- <div class="mb-4 row">
         <div class="col-md-4">Invoice</div>
          <div class="col-md-6">
              <input id="Invoice" class="form-control" type="text" placeholder="kode" aria-label="" readonly> -->
          <!-- </div> -->
         
          <div class="dropdown-divider"></div>
          
          <div class="mb-4 row">
            <!-- <div class="col-md-4">Kode</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            <!-- </div> -->
          </div>

          <div class="mb-4 row">
            <!-- <div class="col-md-4">Nama</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            <!-- </div> -->
          </div>

          <div class="mb-4 row">
            <!-- <div class="col-md-4">Jenis</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            <!-- </div> -->
          </div>

          <div class="mb-4 row">
            <!-- <div class="col-md-4">Jumlah Beli</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            <!-- </div> -->
          </div>

          <div class="mb-4 row">
            <!-- <div class="col-md-4">Diskon</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            <!-- </div> -->
          </div>

          <div class="mb-4 row">
            <!-- <div class="col-md-4">Total Bayar</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            <!-- </div> -->
          </div>

          <div class="mb-4 row">
            <!-- <div class="col-md-4">Pembayaran</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            </div>
          <!-- </div> --> 


        </div>
        </div>
        
      
      </div>
</div>
      
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>