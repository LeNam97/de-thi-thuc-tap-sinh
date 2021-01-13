<?php
    function giaithua($n){
        $giaithua=1;
        for($i=1;$i<=$n;$i++){
            $giaithua=$giaithua*$i;
        }
        echo "Giai thừa của n = $n là : ".$giaithua;
    }
    //Moi nhap so n;
    $n = 6;
    giaithua($n);
?>