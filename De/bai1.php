<?php
    function hoandoi3so($a,$b,$c){
        $temp = $a;
        $a=$b;
        $b=$c;
        $c=$temp;
        echo "Các số sau khi hoán đổi $a , $b, $c";

    }
    $a=1;
    $b=2;
    $c=3;
    hoandoi3so($a,$b,$c);

?>