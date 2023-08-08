<?php 
    function selective_sum($n) {
        $result = 0;
        for($i=1; $i < 101; $i++) {
            if($i % $n == 0) $result += $i;
        }

        return $result;
    }
    $n = 5;
    echo "1~100 정수 중 ".$n."의 배수 합계 : ".selective_sum($n);
    echo "<br>";
?>