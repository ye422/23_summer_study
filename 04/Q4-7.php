<?php 
    $numbers = array(array(3,34,-3,-47,9,10,12,7,-8,4,-13,74), array(1,2,3,4,5,6,7,8,9,10), array(-1, 3, 22, 4, 72, 84, 10, -8, 9, 10));
    
    
    for($i=0; $i < 3; $i++) {
        $string = $i + 1;
        $string .= ": ";
        echo $string;
        for($j=0 ; $j < 10; $j++)
            echo $numbers[$i][$j]. " ";
        echo "<br>";
    }


    echo "<br>";
?>