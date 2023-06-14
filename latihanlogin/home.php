<?php 
session_start();
require_once("koneksi_db.php");
require_once("config.php");
securitylogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME ADMIN</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<h2>Hai, <?php echo $_SESSION['namalog']; ?></h2>
		<a href="?modul=mod_user" class="btn">Modul User</a>
		<a href="?modul=mod_pegawai" class="btn">Modul Pegawai</a>
    <a href="logout.php" class="btn">Logout</a>
		<div class="konten">
			<!-- semua modul akan ditampilkan disini-->
			<?php 				
				if(isset($_GET['modul']) && !isset($_GET['aksi'])){
					//nama folder otomatis sesuai value yang dikirim melalui
					//variabel modul dan tidak ditemukan variabel aksi 
					include_once("".$_GET['modul']."/index.php");
				}
				if(isset($_GET['modul']) && isset($_GET['aksi'])){
					//akan menampilkan file form.php jika ada pengiriman
					//variabel modul dan aksi 
					include_once("".$_GET['modul']."/form.php");
				}
			?>
		</div>
	</div>
	<script src="confiq.js"></script>
</body>

</html>