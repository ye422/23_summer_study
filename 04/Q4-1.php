<?php 
    $width = 12;
    $height = 10;
    function area($w, $h) {
        return $w * $h / 2;
    }

    echo "삼각형의 너비: $width"."cm";
    echo "<br>";
    echo  "삼각형의 높이: $height"."cm";
    echo "<br>";
    echo "삼각형의 넓이는 ".area($width, $height)."cm2 입니다.";
    echo "<br>";

?>