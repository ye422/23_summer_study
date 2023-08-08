<?php 
    $start = 10;
    $end = 50;

    function sum($a, $b) {
        $i = 0;
        $result = 0;
        for($i = $a; $i<= $b; $i++) 
            $result += $i;
        return $result;
    }
    echo $start."에서 ".$end."까지의 정수 합계 : ".sum($start, $end);
    echo "<br>";
?>