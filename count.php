<?php 
$m = '13';
$res = calFn($m);
echo $res;
function calFn($n,$m){

	$n = 1;
	$m = 13;
	for ($i=1; $i <= $m; $i++) { 
		$n = $m+$i;
		$res = $m*$n;
		$arr = substr_count($n,$m);
	}
	return $res;
}


?>