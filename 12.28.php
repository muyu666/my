<?php  

var_dump(fbnq(6));

// function fbnq($n){

// 	$arr = array();
// 	$arr[1] = 1;
// 	$arr[2] = 1;

// 	for ($i=3; $i <= $n; $i++) { 
// 		$arr[$i] = $arr[$i-1]+$arr[$i-2];
// 	}
// 	return $arr[$n];
// }

function fbnq($n){

	if ($n<=0) {
		return 0;
	}
	if ($n == 1 || $n == 2) {
		return 1;
	}
	return fbnq($n-1)+fbnq($n-2);
}