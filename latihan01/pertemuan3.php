<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <?php 
    // $calonsukses = array("syarif","daud","dzaky","fero");
    // echo $calonsukses[0];
    // // var_dump($calonsukses);

    // //associative array
    // $calonsukses2 = array("daud"=>"ui designer","fero"=>"be developer","dzaky"=>"fe developer","syarif"=>"analysis system");
    // echo $calonsukses2[" ",'daud'];

    // multidimensional array
    // $startup = array(
    //     array("nama"=>"daud","jabatan"=>"ui designer","gaji"=> 10000000),
    //     array("nama"=>"fero","jabatan"=>"be developer","gaji"=> 10000000),
    //     array("nama"=>"dzaky","jabatan"=>"fe developer","gaji"=> 10000000),
    //     array("nama"=>"syarif","jabatan"=>"analysis system","gaji"=> 8000000)
    // );
    // echo "startup: ".$startup[3]['nama']." ,jabatan ".$startup[3]['jabatan']." ,gaji ".$startup[2]['gaji']
    for($i = 1; $i <= 50; $i++){
        if ($i % 2 == 0){
        echo $i." , ";
        }
    }
    echo "<br>";
    $a = 1;
    while($a <= 20){
        if ($a % 2 <> 0){
            echo $a. " , ";
        }
        $a++;
    }

    echo "<br>";
    $calonsukses = array("syarif","daud","dzaky","fero");
    foreach($calonsukses as $g){
        echo $g." , ";
    }
    echo "<br>";
    for($x=0; $x < count ($calonsukses);$x++){
        echo $x;
        echo $calonsukses [$x];
    }
    ?>
</body>
</html>