
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->
    <?php 
    if(!isset($_GET['aksi'])){
    ?>

    <?php
    $qdata = mysqli_query($koneksidb, "select * from mst_kategori")
    or die("Tabel Tidak Ditemukan" .mysqli_error($koneksidb));
    ?>

    <div class="countainer">
        
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md mt-3">
                <a href="?modul=mod_kategori&aksi=add"  class="btn btn-primary btn-sm btn-xs mb-1">Tambah Data</a>

                
                <table class="table mt-1">
                    <tr>
                        <th scope="col">ID Katagori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>

                    <?php
                    while($row = mysqli_fetch_array($qdata)){
                    ?>

                    <tr>
                        <td><?php echo $row['id_kategori']?></td>
                        <td><?php echo $row['nm_kategori']?></td>
                        <td> 
                            <button class="btn btn-primary" type="submit"><i class="bi bi-pencil-saquare">Edit</i></button>
                            <button class="btn btn-primary" type="submit"><i class="bi bi-x-lg">Delete</i></button>
                        </td>
                    </tr>

                    <?php } 
                    
                    ?>
                    
                </table>
                    
            </div>
        </div>

    </div>
    
    <?php }
    elseif(isset($_GET['aksi'])){
    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"> -->

<form action="mod_kategori/proses.php?aksi=insert" method="post">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md">
            <font face = "Comic sans MS" size =" 5">From Input Data</font>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-7">
                        <input type="text" name="txt_nama" id="txt_nama" class="form-control" id="inputkategori">
                        
                        <button class="btn btn-secondary" type="reset"><i class="bi bi-x-lg"> Batal</i></button>
                        <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
                    </div>
                </div>            
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</form>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <?php } ?>
 