<?php  

$str = "student a am I";
var_dump(ReverseSentence($str));

function ReverseSentence($str){

	$english = explode(' ', $str);

	for ($i=count($english); $i >= 0; $i--) { 
		$res[] = $english[$i];
	}

	$arr = implode(' ',$res);

	return $arr;
}