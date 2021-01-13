<?php
    function trungbinhmang($arr){
        $tong=0;
        for($i = 0;$i<sizeof($arr);$i++){
            $tong= $tong+$arr[$i];
        }
        echo "Trung Bình của mảng gồm " .$dodai = sizeof($arr)." Phần tử là:".$tong/sizeof($arr); 
    }
    $arr = array(1,2,3,4,5,6,7);
    trungbinhmang($arr);
    
?>