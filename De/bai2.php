<?php
    function tinhsomu($a,$b){
        $tong=1;
        for($i=0;$i<$b;$i++){
            $tong=$tong*$a;
        }
        echo"Giá trị của $a mũ $b là: ".$tong;
    }
    $a=3;
    $b=4;
    tinhsomu($a,$b);
?>