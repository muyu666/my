<?php 

$n = 10;
$m = 2;
$res = findNumSum($n,$m);
var_dump($res);

function findNumSum($n,$m){

	$arr[] = $n;
	$arr[] = $m;
	for ($i=1; $i <= $n; $i++) { 
		$num = $i+$n;
	}
	return $arr;
	if ($arr == 2 && $arr <= $n) {
		$num = array_sum($arr);
	}
	return $arr;
}

?>