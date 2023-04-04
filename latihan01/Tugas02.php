<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Togasass02</title>
</head>
<body>
<table border="1" cellpadding="1">
        <tr>
            <th>Tanggal</th>
            <th>Jam Tidur</th>
            <th>Jam Bangun</th>
            <th>Jam Tidur Tambahan</th>
            <th>Jam Bangun Lagi</th>
            <th>Kurang Tidur</th>
            <th>Aturan</th>

        </tr>
        <?php
        date_default_timezone_set("Asia/Jakarta");
         $data = array(
            array("Tanggal" => "1", "Jam Tidur" => "23:00" , "Jam Bangun" => "04:00", "Jam Tidur Lagi" => "05:00", "Jam Bangun Lagi" => "06:00"),
            array("Tanggal" => "2", "Jam Tidur" => "22:30", "Jam Bangun" => "04:00", "Jam Tidur Lagi" => "05:00", "Jam Bangun Lagi" => "06:00"),
            array("Tanggal" => "3", "Jam Tidur" => "21:00", "Jam Bangun" => "04:00", "Jam Tidur Lagi" => "05:00", "Jam Bangun Lagi" => "06:00"),
            array("Tanggal" => "4", "Jam Tidur" => "23:00", "Jam Bangun" => "04:00", "Jam Tidur Lagi" => "05:00", "Jam Bangun Lagi" => "06:00")
        );
        foreach($data as $d){
    ?>
        <tr>
            <td><?php echo $d["Tanggal"];?></td>
            <td><?php echo $d["Jam Tidur"];?></td>
            <td><?php echo $d["Jam Bangun"];?></td>
            <td><?php echo $d["Jam Tidur Lagi"];?></td>
            <td><?php echo $d["Jam Bangun Lagi"];?></td>
            <td><?php echo 
            
            $tidur1 = $d["Jam Tidur"];
            $bangun1 = $d["Jam Bangun"];
            $tidur2 = $d["Jam Tidur Lagi"];
            $bangun2 = $d["Jam Bangun Lagi"];

            function sehat1(){
            $tidurpertama = date_diff($tidur1, date_create($bangun1));
            $tidurkedua = date_diff($tidur2, date_create($bangun2));
            return "Tidur Kurang " .$tidurpertama->format("%h Jam %i Menit");
            
            // $tidurpertama = $tidur1 //>format("%h")// - $bangun1;
            // $tidurkedua = $tidur2 - $bangun2;
            // echo "Tidur Kurang ". $jam. " Jam Dan ". floor($menit/60). " Menit ";
            }
            echo sehat1();



            // function sehat2(){
            // $tidurkedua = $tidur2 - $bangun2;
            // return $tidurkedua;
            // }
            
            // $jam = floor($diff / (60 * 60));
            // $menit = $diff - $jam * (60 * 60);
            // echo "Tidur Kurang ". $jam. " Jam Dan ". floor($menit/60). " Menit ";
            

            // $demisehat = date_diff(date_create($bangun1),date_create($tidur1));
            // $jumlah = $sehat1 + date_diff(datecreate($bangun2),date_create($tidur2));
            
            
            ?></td>
            
            <td><?php echo
            $sengaja = "Lama Tidur";
            $tidaksengaja = "Amnesia";
            $sengajatapitidaksengaja = "tidur tapi bangun lagi"
            $mulai
            if($sengaja == "Lama Tidur"){
                if($sengaja >= $tidaksengaja){
                    echo "Lain Kali Di Perhatikan";
                }
                else{
                    echo "Sekalian Tidak Tidur Seharian";
                }
            }
            elseif($tidaksengaja == "Amnesia"){
                if($sengajatapitidaksengaja >= $tidaksengaja){
                    echo "Sekalian Tidak Tidur Seharian";
                }
            }
            
            ?></td>
            
        </tr>
        <?php }
        ?>
    </table>


</body>
</html>