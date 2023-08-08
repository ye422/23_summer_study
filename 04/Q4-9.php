<?php

    $seats = array(array(0,0,1,0,0,0,0,1,0,0), array(0,0,0,0,1,0,1,1,0,0)
                    ,array(0,0,1,1,0,0,0,0,1,0), array(0,1,0,0,0,0,1,0,0,0)
                    , array(0,0,0,0,1,0,0,0,1,0) );
    function display($a) {
        if($a == 0) echo "□ ";
        else echo "■ ";
    }

    for($i=0; $i < 5; $i++) {
        for($j=0; $j < 10; $j++) {
            display($seats[$i][$j]);
        }
        echo "<br>";
    }


?>