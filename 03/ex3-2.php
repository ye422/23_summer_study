<?php
 	$a = 65;
    $b = 90;
	$result = "불합격";
             
 	if ($a >= 70 and $b >= 70) {
		$result = "합격";
	}

    echo "필기 점수 : ".$a.", 실기점수 : ".$b."<br>";
    echo "결과 : ".$result;
?>