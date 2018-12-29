<?php 

var_dump(calSteps(5));
function calSteps($n){

	if ($n == 1 || $n == 2) {
		return $n;
	}
	$sum = 0;
	$jump1 = 1;
	$jump2 = 2;
	for ($i=3; $i <= $n; $i++) { 
		$sum = $jump1+$jump2;
		$jump1 = $jump2;
		$jump2 = $sum;
	}
	return $sum;
}