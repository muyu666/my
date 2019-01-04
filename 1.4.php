<?php 

var_dump(LastRemaining_Solution(6,10));
function LastRemaining_Solution($n,$m){

	$res = 0;

	if ($m == 1) {
		return 0;
	}

	for ($i=2; $i <= $n; $i++) { 

		$res = ($res + $m) % $i;
	}
	return $res;

}

// function LastRemaining_Solution($n,$m){

// 	if ($n == 1) {
// 		return 0;
// 	}else{
// 		return (LastRemaining_Solution($n-1,$m)+$m)%$n;
// 	}

// }