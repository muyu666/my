<?php 

//调用方法
for ($i=100; $i < 1000; $i++) { 
	$arr = dailyOne($i);
	if (isset($arr)) {
		var_dump($arr);
	}
}


function dailyOne($str){

	$res = '';
	$g = $str%10;
	$s = $str/10%10;
	$b = $str/100%10;
	$res = $b*$b*$b+$s*$s*$s+$g*$g*$g;

	if ($res == $str) {
		return $res;
	}else{
		// return 'NO';
	}


}




?>