<?php 

$res = one("Have you ever gone shopping and");
var_dump($res);

function one($str){

	$res = '';
	$arr = [];

	for ($i=0, $len = strlen($str); $i<$len; $i++) { 
		if (isset($arr[$str[$i]])) {
			$arr[$str[$i]]++;
		}else{
			$arr[$str[$i]] = 1;
		}

		if ($arr[$str[$i]] == 3) {
			$res = $str[$i];
			break;
		}
	}
	return $res;
}