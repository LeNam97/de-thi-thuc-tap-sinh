<?php
    function soluongchan($arr){
        $soluong=0;
        for($i = 0;$i<sizeof($arr);$i++){
            if($arr[$i]%2==0){
                $soluong+=1;
            }
        }
        echo "Số lượng số lẻ có trong mảng: ".$soluong;
    }
    
    $arr= array(1,2,3,4,5,6,7);
    soluongchan($arr);

?>