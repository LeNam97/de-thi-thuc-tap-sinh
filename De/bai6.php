<?php

    function tongsochan($arr){
        $tong=0;
        for($i = 0;$i<sizeof($arr);$i++){
            if($arr[$i]%2==0){
                $tong=$tong+$arr[$i];
            }
        }
        echo "Tổng số chẵn trong mảng: ".$tong;
    }
    
    $arr= array(1,2,3,4,5,6,7);
    tongsochan($arr);

?>