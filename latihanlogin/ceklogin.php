<?php 
	require_once("koneksi_db.php");
	session_start();
	$usernya = $_POST['txt_user'];
	$passnya = md5($_POST['txt_pasw']);
		echo $usernya."<br>";
		echo $passnya."<br>";
	$query_login = mysqli_query($koneksidb, 
						"select * from mst_user where BINARY username='".$usernya."' AND password='".$passnya."'");
	$cekhasil = mysqli_num_rows($query_login); //jumlah data yg ditemukan
	$hasil =  mysqli_fetch_array($query_login); //variabel yg menampung hasil query
	if($cekhasil > 0){
		echo "data ditemukan, Selamat Anda Berhasil Login";
		$_SESSION['userlog'] = $usernya; //menampung username
		$_SESSION['namalog'] =  $hasil['nama']; //menampung nama
		header("Location: home.php");
	}
	else{
		$_SESSION['pesan'] = "Username atau Password Salah, silahkan Login kembali";
		header("Location: index.php"); //pindah halaman
	}
 ?>