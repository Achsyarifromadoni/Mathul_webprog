<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body> <!-- ini bagian navbar  -->
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <span class="navbar-brand mb-0">Halaman Login</span>
      </div>
    </nav>
    <!-- ini bagian konten -->
    <section id="konten">
      <div class="container-fluid">
        <div id="judul"></div>
        <h1 class="title"></h1>
        <form action="#" method="post" class="m-lg-5">
          <div class="row justify-content-center">
            <div class="col-md-1">Username</div>
            <div class="col-md-5">
              <input type="text" name="username" id="user" placeholder="input username" />
            </div>
          </div>
          <div class="row pt-1 justify-content-center">
            <div class="col-md-1">Password</div>
            <div class="col-md-5">
              <input type="password" name="password" id="password" />
            </div>
          </div>
          <div class="row pt-1 justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-6">
              <button type="button" name="btnlogin" id="btnlogin" onclick="ceklogin()" class="btn btn-sm btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- letakkan file-file JS disini -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="assets/dock.js"></script> -->
        <!-- <script src="dockbaru.js"></script> -->
        <!-- <script src="assets/ceklogin.js"></script> -->
</body>
</html>