<?php
    $n = 1;
    $cnt = 0;
    while ($n<=100) {
        if ($n%3 == 0)  {
            echo "$n ";
            $cnt++;

            if ($cnt%10 == 0)
                echo "<br>";
        }
        $n++;
    }
 ?>