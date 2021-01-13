<?php
    function giatrilonnhat($arr){
        $max = $arr[0];
        for($i=1;$i<sizeof($arr);$i++){
            if($max<=$arr[$i]){
                $max=$arr[$i];
            }
        }
        echo "Giá trị nhỏ nhất trong dãy là : ".$max;
    }
    $arr= array(9,3,7,2,8,11,1,11,11);
    giatrilonnhat($arr);
?>