<?php
    //hàm trả ra kết quả tìm kiếm giá trị trong 1 mảng  
    function find($key,$arr)
    {
        for($i=0 ; $i<sizeof($arr); $i++){
            if($arr[$i]!=$key){
                echo "Giá trị cần tìm không tồn tại".'<br>' ;
            }else{
                echo 'Giá trị cần tìm nằm ở vị trí :'.($i+1).'<br>';
            }
        }
    }
    $arr = array(1,2,5,4,5);
    $key = 5;
    find($key,$arr);

?>