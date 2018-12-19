<?php 

$arr = [3,5,8,12,15,20,24,28,30];
$a = 10;
$low = 0;
$high = count($low+1);
$info = num($arr,$a,$low,$high);
var_dump($info);

function num($arr,$a,$low,$high){
	$low = 0;
	$high = 10;
	if ($res[] > $high) {
		return -1;
	}
	$mid = intval(($low+$high)/2);
	if ($res[$mid]) {
		return $res[];
	}elseif($res[$mid] > $low){
		return $res[$arr,$a,$low+1,$high];
	}else{
		return $res[$high];
	}
	return $mid;
}

?>