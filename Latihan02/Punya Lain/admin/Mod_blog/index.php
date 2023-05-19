
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->
    <?php 
    if(!isset($_GET['aksi'])){
    ?>

    <?php
    $qdata = mysqli_query($koneksidb, "SELECT a.* , nm_kategori FROM mst_blog AS a INNER JOIN mst_kategori AS b ON a.idkategori = b.id_kategori")
    or die("Tabel Tidak Ditemukan" .mysqli_error($koneksidb));
    ?>
    


    
            <!-- <div class="col-md-4">

            </div> -->
            <div class="col-md mt-2">
                <a href ="?modul=mod_blog&aksi=add" class="btn btn-primary btn-sm" href="form.php">Tambah Data</a>
                <table class="table mt-1">
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">File Gambar</th>
                        <th scope="col">Isi Blog</th>
                        <th scope="col">Tanggal Blog</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Action</th>
                        
                    </tr>

                    <?php
                    while($row = mysqli_fetch_array($qdata)){
                    ?>

                    <tr>
                        <td><?= $row['judul'];?></td>
                        <td><?= $row['gambar'];?></td>
                        <td><?= $row['isiblog'];?></td>
                        <td><?= $row['tglblog'];?></td>
                        <td><?= $row['penulis'];?></td>
                        <td><?= $row['nm_kategori'];?></td>
                        <td> 
                            <a href="?modul=Mod_blog&aksi=edit&id=<?php echo $row['idkategori']?>"><button class="btn btn-primary" type="submit"><i class="bi bi-pencil-saquare">Edit</i></button></a>
                            <a href="mod_blog/proses.php?proses=delete&id=<?php echo $row['idkategori']?>"><button class="btn btn-primary" type="submit"><i class="bi bi-x-lg">Delete</i></button></a>
                        </td>
                    </tr>
                    
                    <?php 
                    } 
                    
                    ?>
                </table>
                 
                <?php }
                    elseif(isset($_GET['aksi'])){
                    if($_GET['aksi'] == "edit"){
                        //Proses Edit
                        $query = mysqli_query($koneksidb, "select * from mst_kategori where id_kategori=".$_GET['id']."") 
                        or die ("Data Tidak ditemukan".mysqli_error($koneksidb));

                        $data = mysqli_fetch_array($query);
                        // echo $data['nm_kategori'];
                        $nama = $data['nm_kategori'];
                        $exproses = "update";
                    }
                    else if($_GET['aksi'] == "add"){
                        $nama = "";
                        $exproses = "insert";
                        //ini variabel untuk mengisi value dari inputan
                        $idnya = 0;
                        $judulnya = "";
                        $kategorinya = "";
                        $isinya = "";
                        $tglnya = "";
                        //Proses Add
                    }
                    ?>


            <div class="container-fluid">

           
                <h3>Form Input Data</h3>
                
                <div class="mb-3 row">
                
                    <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Blog</label>
                    
                    
                    
                    <div class="col-sm-5">
                        
                    <form action="Mod_blog/proses.php?proses=<?php echo $exproses; ?>" method="post">
                    <input type="hidden" name="idblog" value="<?php echo $idblog; ?>">

                        <select class="form-select col-sm-5" name = "kategori" aria-label="Default select example">
                            <option selected>-- Pilih Kategori --</option>
                            
                            <?php 
                            $qkategori = mysqli_query ($koneksidb, "select * from mst_kategori")
                            or die ( "Data Tidak Ditemukan" .mysqli_error($koneksidb));
                            while ($cb = mysqli_fetch_array($qkategori)){
                                // if($cb["id_kategori"] == $kategorinya)
                                echo '<option value="'.$cb["id_kategori"].'">'.$cb['nm_kategori'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-5">
                        <input type="text" name = "judul" class="form-control" id="inputjudul" value= "<?php echo $judulnya; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Isi</label>
                    <div class="col-sm-5">
                        <textarea name = "isi" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $isinya; ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="col-sm-7">
                        <input type="file" scr="#"></input>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Input</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="inputtanggal" name ="tanggal">
                        
                    </div>
                    
                </div>
                <div>
                <div class="col-sm-7">
                <label>Active</label>
                    <input type="checkbox" name = "isachtive">
                    </div>
                </div>
                <hr>
                <button class="btn btn-secondary" type="submit"><i class="bi bi-x-lg"> Delete</i></button>
                <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>
            
            </form>

            </div>





</div>


     
    

            
        
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php } ?>