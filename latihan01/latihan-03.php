<?php 
    $tokoase = array(
        array("Kode" => "BO1", "Barang" => "Buku", "Harga" => 50000),
        array("Kode" => "BO2", "Barang" => "Pulpen", "Harga" => 10000),
        array("Kode" => "BO3", "Barang" => "Penghapus", "Harga" => 5000)
    );
    $total;
    $diskonb01 = 3000;
    $diskonb02 = 2000;
    $jumlah = 3;
    $diskon;
    if($tokoase[0]["kode"]){
        if(3<=$jumlah){
            $tokoase[0]["Harga"] = 50000;
            $diskonb01 - $tokoase[0]["Harga"];
            $total = $tokoase[0]["Harga"] * $jumlah;
            echo "B01 Buku, Beli Sebanyak : ".$jumlah;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }
        else{
            $total = $tokoase[0]["Harga"] * $jumlah;
            echo "BO1 Buku, Beli Sebanyak : ".$jumlah;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }
    }
    elseif($tokoase[1]["kode"]){
        if(6>=$jumlah){
            $tokoase[1]["harga"] = 10000;
            $diskonb02 - $tokoase[1]["Harga"];
            $total = $tokoase[1]["harga"] * $jumlah;
            echo "B02 Pulpen, Beli Sebanyak : ".$jumlah;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }
        else{
            $total = $tokoase[1]["Harga"] * $jumlah;
            echo "BO2 Pulpen, Beli Sebanyak : ".$jumlah;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }
    }
    else{
        $total = $tokoase[2]["Harga"] * $jumlah;
        echo "BO3 Penghapus, Beli Sebanyak : ".$jumlah;
        echo "<br>";
        echo "Jumlah diBayar : ".$total;
    }
    echo "<hr>";
    foreach($tokoase as $tokoase){
        foreach($tokoase as $a){
            echo $a." : ";
        }
        echo "<hr>";
    }
    ?>
