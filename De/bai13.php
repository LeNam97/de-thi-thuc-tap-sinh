<?php

    function daonguocmang($arr){
        echo"Mảng sau khi đảo ngược là: ";
        for($j = sizeof($arr)-1;$j>=0;$j--){        
            echo $arr[$j].', ';
        }
    }
    $arr = array(1,2,3,4,5,6,7,8,9,10,11,12);
    daonguocmang($arr);
?>