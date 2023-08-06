<?php
    $cnt = 0;
    for ($n=300; $n<=350; $n++) {
        if ($n%5 != 0)  {
            echo "$n ";
            $cnt++;

            if ($cnt%10 == 0)
                echo "<br>";
        }
    }
 ?>