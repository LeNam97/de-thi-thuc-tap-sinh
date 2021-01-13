<?php
    function dongnhat($num1,$num2){
        $num1%=2;
        $num2%=2;
        if($num1==0 && $num2==0){
            echo "2 số cùng chẵn";
        }elseif($num1!=0 && $num2!=0){
            echo "2 số cùng lẻ";
        }else{
            echo "2 số gồm 1 số chẵn và 1 số lẻ";
        }
    }

    $a=1;
    $b=8;
    dongnhat($a,$b);



?>