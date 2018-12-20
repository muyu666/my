<?php 

$a = 5;
$b = 6;
$info = CountSteps($a,$b);
var_dump($info);

// function CountSteps($x,$y){

// 	for ($i=0; $i < $x; $i++) { 
// 		for ($j=0; $j < $y; $j++) { 
// 			$arr[$i][$j] = 1;
// 		}
// 	}

// 	for ($i=1; $i <= $x; $i++) { 
// 		$arr[$i-1][$y] = 0;
// 	}
// 	for ($i=1; $i <= $y; $i++) { 
// 		$arr[$x][$i-1] = 0;
// 	}

// 	for ($i=1; $i < $x; $i++) { 
// 		for ($j=1; $j < $y; $j++) { 
// 			$arr[$i][$j] = 1;
// 		}
// 	}
// 	return $arr[$x][$y];
// }

function CountSteps($x,$y){

	if ($x == 1 && $y == 1) {
		return 0;
	}
	if ($x == 1 || $y == 1) {
		return 1;
	}
	return CountSteps($x-1,$y)+CountSteps($x,$y-1);
}
?>