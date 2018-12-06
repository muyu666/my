<?php 

$n = 10;
$m = 4;
$res = LastRema($n,$m);
var_dump($res);

function LastRema($n,$m){

	$arr = 0;
	$arr = $n+$m;
	for ($i=2; $i < $n; $i++) { 
		$arr = ($arr+$n[$i])%$m;
	}

	return $arr;
}


?>