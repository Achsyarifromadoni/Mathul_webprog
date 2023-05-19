<?php 
    if(!isset($_GET['aksi'])){
    ?>

    <?php
    $qdata = mysqli_query($koneksidb, "select * from mst_user")
    or die("Tabel Tidak Ditemukan" .mysqli_error($koneksidb));
    ?>

    <div class="countainer">
        
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md mt-3">
                <a href="?modul=mod_user&aksi=add"  class="btn btn-primary btn-sm btn-xs mb-1">Tambah Data</a>

                
                <table class="table mt-1">
                    <tr>
                        <th scope="col">ID User</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>

                    <?php
                    //$no = 1;
                    while($row = mysqli_fetch_array($qdata)){
                    ?>

                    <tr>
                        <!-- <td><?php //echo $no; ?></td> -->
                        <td><?php echo $row['iduser']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['passwordd']?></td>
                        <td> 
                            <a href="?modul=mod_user&aksi=edit&id=<?php echo $row['iduser']?>"><button class="btn btn-primary" type="button"><i class="bi bi-pencil-saquare">Edit</i></button></a>
                            <a href="mod_user/proses.php?proses=delete&id=<?php echo $row['iduser']?>"><button class="btn btn-primary" type="submit"><i class="bi bi-x-lg">Delete</i></button></a>
                        </td>
                    </tr>

                    <?php //$no++; 
                    } 
                    ?>
                    
                </table>
                    
            </div>
        </div>

    </div>
    
    <?php }
    elseif(isset($_GET['aksi'])){
        if($_GET['aksi'] == "edit"){
            //Proses Edit
            $query = mysqli_query($koneksidb, "select * from mst_user where iduser=".$_GET['id']."") 
            or die ("Data Tidak ditemukan".mysqli_error($koneksidb));

            $data = mysqli_fetch_array($query);
            // echo $data['nm_kategori'];
            $nama = $data['username'];
            $exproses = "update";
            $idnya = $_GET['id'];
            $pass = $data['passwordd'];
        }
        else if($_GET['aksi'] == "add"){
            $nama = "";
            $exproses = "insert";
            $idnya = 0;
            $nama = "";
            $pass = "";
            //Proses Add
        }
    ?>

<form action="mod_user/proses.php?proses=<?php echo $exproses; ?>" method="POST">
<div class="dropdown-divider"></div>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">
                <h3>Form Input Data</h3>
                
                <div class="mb-3 row">
                    <!-- <label for="inputPassword" class="col-sm-3 col-form-label">iduser</label> -->
                    <div class="col-sm-7">
                        <input type="hidden" class="form-control" id="inputkategori" name="iduser" value= <?php echo $idnya?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputkategori" name="username" value= <?php echo $nama?>>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputkategori" name="password" value= <?php echo $pass?>>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">Active</label>
                </div>
                <button class="btn btn-secondary" type="reset"><i class="bi bi-x-lg"> Batal</i></button>
                <button class="btn btn-primary" type="submit"><i class="bi bi-save"> Simpan</i></button>            
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</form>
    <div class="dropdown-divider"></div>

    <?php } ?>