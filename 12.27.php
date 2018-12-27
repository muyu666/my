<?php 


var_dump(flower(65));
function flower($str){

	$res = '';
	$g = $str%10;
	$s = $str/10%10;
	$b = $str/100%10;

	$res = $g*$g*$g+$s*$s*$s+$b*$b*$b;

	if ($res == $str) {
		return 'TRUE';
	}else{
		return 'FALSE';
	}
}