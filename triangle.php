<?php
function ucgen($sayi){
    // $num = 1;
    // while($sayi >= $num){
    //     for($i = 0; $i < $num ; $i++){
    //         echo " 0";
    //     }
    //     $num++;
    //     echo "<br>";
    // }

    for($i = 0; $i <= $sayi ;$i++){
        for($j = 0; $j <= $i; $j++){
            echo "0 ";
        }
        echo "<br>";
    }
}
ucgen(15);
?>
