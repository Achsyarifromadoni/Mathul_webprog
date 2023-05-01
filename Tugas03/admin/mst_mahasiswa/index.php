
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->
    <?php 
    if(!isset($_GET['aksi'])){
    ?>

    <?php
    $qdata = mysqli_query($koneksidb, "select * from mst_mahasiswa")
    or die("Tabel Tidak Ditemukan" .mysqli_error($koneksidb));
    ?>

    <div class="countainer">
        
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md mt-3">
                <a href="?modul=mst_mahasiswa&aksi=add"  class="btn btn-primary btn-sm btn-xs mb-1">Tambah Data</a>

                
                <table class="table mt-1">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Induk Mahasiswa</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>

                    <?php
                    while($row = mysqli_fetch_array($qdata)){
                    ?>

                    <tr>
                        <td><?php echo $row['number']?></td>
                        <td><?php echo $row['nomerinduk']?></td>
                        <td><?php echo $row['namaa']?></td>
                        <td><?php echo $row['tempatlahirr']?></td>
                        <td><?php echo $row['tanggallahirr']?></td>
                        <td><?php echo $row['jurusann']?></td>
                        <td><?php echo $row['telpp']?></td>
                        <td><?php echo $row['emaill']?></td>
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
   
<form action="mst_mahasiswa/proses.php?aksi=insert" method="post">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md">
            <font face = "Comic sans MS" size =" 5">From Input Data</font>
                
        <div class="mb-2 row">
          <div class="col-md-4">No Induk</div>
          <div class="col-md-6">
              <input id="nomerindukmahasiswa" class="form-control" type="text" placeholder="Nomer Induk Mahasiswa" aria-label="default input example" >
          </div>
         
          <div class="dropdown-divider"></div>
        
          <div class="mb-2 row">
            <div class="col-md-4">Nama Mahasiswa</div>
            <div class="col-md-6">
                <input id="namaa" class="form-control" type="text" placeholder="Nama" aria-label="default input example">
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4">Tempat Lahir</div>
            <div class="col-md-6">
                <input id="tempatlahirr" class="form-control" type="text" placeholder="Tempat Lahir" aria-label="default input example">
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4">Tangal Lahir</div>
            <div class="col-md-6">
                <input id="tanggallahirr" class="form-control" type="number" placeholder="tanggal Lahir" aria-label="default input example">
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4">Jurusan</div>
            <div class="col-md-6">
                <input id="jurusann" class="form-control" type="text" placeholder="Jurusan" aria-label="default input example">
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4">Telp</div>
            <div class="col-md-6">
                <input id="telpp" class="form-control" type="number_format" placeholder="Number" aria-label="default input example">
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <div class="col-md-4">Email</div>
            <div class="col-md-6">
                <input id="emaill" class="form-control" type="text" placeholder="Email" aria-label="default input example">
            </div>
          </div>

          <div class="dropdown-divider"></div>

          <div class="mb-2 row">
            <!-- <div class="col-md-4">Pembayaran</div>
            <div class="col-md-6">
                <input id="istilah" class="form-control" type="text" placeholder="Text" aria-label="default input example"> -->
            </div>
          
            <button class="btn btn-secondary col-md-4 col-md-2" type="reset"><i class="bi bi-x-lg"> Batal</i></button>
            <button class="col-md-4 col-md-2" type="submit"><i class="bi bi-save"> Simpan</i></button>
        
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
 