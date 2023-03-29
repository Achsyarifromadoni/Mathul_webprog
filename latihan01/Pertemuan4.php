<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4</title>
</head>
<body>
    <table border="1" cellpadding="1">
        <tr>
            <td>ID</td>
            <td>Judul</td>
            <td>Konten</td>
            <td>Action</td>
        </tr>
        <?php
         $data = array(
            array("ID" => "O1", "Judul" => "Judul01", "Konten" => "Isi Berita"),
            array("ID" => "O2", "Judul" => "Judul02", "Konten" => "Isi Berita"),
            array("ID" => "O3", "Judul" => "Judul03", "Konten" => "Isi Berita")
        );
        foreach($data as $d){
    ?>
        <tr>
            <td><?php echo $d["ID"];?></td>
            <td><?php echo $d["Judul"];?></td>
            <td><?php echo $d["Konten"];?></td>
            <td>
                <a href="?id=<?php echo $d["ID"];?>">Edit</a>
                <a href="#">Delete</a>
            </td>
        </tr>
        <?php }
        ?>
    </table>
</body>
</html>
<?php 
$kata ="Belajar PHP Itu Mudah";
$katakedua = explode(" ", $kata); //string to array
var_dump($katakedua);
echo "<br>";
$kataketiga = implode (" ", $katakedua); //array to string
echo $kataketiga. "<br/>";
echo ltrim ($kataketiga, "Belajar");
echo "<br>";
echo rtrim($kataketiga, "Mudah");

echo "<br>";
echo "<br>";

date_default_timezone_set("Asia/Jakarta");
$today = date("Y-m-d, l h:i:s");
echo "Syarif  ".$today;

echo "<br>";
echo "<br>";

$tgllahir = date_create("01-03-2006");
$tglhariini = date("d-m-Y");
$umur = date_diff($tgllahir, date_create($tglhariini));
echo "umur = ".$umur->format("%y tahun %m Bulan %d Hari %a Hidup");

echo "<br>";
echo "<br>";

function hitungumur(){
$tgllahir = date_create("01-03-2006");
$tglhariini = date("d-m-Y");
$umur = date_diff($tgllahir, date_create($tglhariini));
return "umur = ".$umur->format("%y tahun %m Bulan %d Hari %a Hidup");
}
echo hitungumur();

echo "<br>";
echo "<br>";


function datamMhs($Jurusan = "IT" ,$Nama = "Daud" ,$Nilai = 90){
echo "Nama : ", $Nama, $Jurusan, $Nilai;
}
dataMhs("IT", "Daud", 90);
?>