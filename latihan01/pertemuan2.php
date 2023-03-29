<?php
// $pembeli = "daud";
// $uang = 10000000;
// $laptop;
// if($uang < 10000000){
//     $laptop = "laptop Asus";
// }
// else{
//     $laptop = "Laptop HP";
// }
// echo "Maka $pembeli membeli $laptop";
// echo "<hr>";

$mahasiswa = "dzaky";
$seragam;
if($mahasiswa == "seragam lengkap"){
    $seragam = "silahkan mengikuti kuliah";
}
if($mahasiswa == "seragam tidak sesuai"){
    $seragam = "laksanakan hukuman";
}
else{
    $seragam = "kena SP";
}
echo "maka $mahasiswa $seragam";
echo "<hr>";

//contoh

// $mahasiswa = "seragam lengkap";
// $seragam;
// if($mahasiswa == "seragam lengkap"){
//     $seragam = "silahkan mengikuti kuliah";
// }
// else if($mahasiswa == "seragam tidak sesuai"){
//     $seragam = "laksanakan hukuman";
// }
// else if(empty){
//     $seragam = "Isi Dulu";
// }
// else{
//     $seragam = "kena SP";
// }
// echo "maka $seragam";
// echo "<hr>";

$pembeli = "daud";
$uang = 10000000;
switch ($uang){
    case $uang < 10000000:
    echo "Bisa Beli Laptop Asus";
    break;

    default:
    echo "Tidak Bisa Beli Laptop";
}

echo "<hr>";

// $pembeli = "daud";
// $uang = 10000000;2
// $laptop;
// if($uang < 10000000){
//     $laptop = "laptop Asus";
// }
// else{
//     $laptop = "Laptop HP";
// }
// echo "Maka $pembeli membeli $laptop";


?>