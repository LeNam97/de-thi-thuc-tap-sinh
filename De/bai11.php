<?php
    function giatrinhonhat($arr){
        $min = $arr[0];
        for($i=1;$i<sizeof($arr);$i++){
            if($min>=$arr[$i]){
                $min=$arr[$i];
            }
        }
        echo "Giá trị nhỏ nhất trong dãy là : ".$min;
    }
    $arr= array(9,3,7,2,8,11,1,1,1);
    giatrinhonhat($arr);
    
?>