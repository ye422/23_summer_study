<?php
    function cal_price($type, $a) {       
        if ($type == "조조") {          
            if ($a<=18 or $a>=65)   
                $money = 7000;
            else
                $money = 9000;
        }
        else {                         
            if ($a<=18) 
                $money = 10000;
            elseif ($a>=65) 
                $money = 7000;
            else
                $money = 13000;           
        }

        return $money;
    }

    $category = "일반";
    $age = 70;

    $price = cal_price($category, $age);

    echo "구분 : ".$category."<br>";
    echo "나이 : ".$age."<br>";
    echo "입장료는 ".$price."원 입니다.";
?>
