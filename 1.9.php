<?php  

function Sum_Solution($num){

	$res = 0;
	$num && $res = $num + Sum_Solution($num-1);
	return $res;
}
var_dump(Sum_Solution(5));