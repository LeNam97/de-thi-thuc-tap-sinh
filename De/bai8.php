<?php
    function songuyento($a){
        if ($a < 2) {
            return false;
        }
        $square = sqrt ( $a );
        for($i = 2; $i <= $square; $i ++) {
            if ($a % $i == 0) {
                return false;
            }
        }
        return true;
    }

    //Nhập giá trị của a
    $a = 11;
    if(songuyento($a)==true){
        echo"$a là số nguyên tố";
    }else{
        echo "$a Không là số nguyên tố";
    }
    
?>