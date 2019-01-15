<?php  

$arr = [1,3,6,9];
$res = [2,4,5,8,20];
var_dump(Combine($arr,$res));


function Combine($arr,$res){

	for ($i=0, $i = count($arr);$i < $len; $i++) { 
		$arr[$i] = $res[$j];
	}

	for ($i=0, $i = count($arr); $i<$len; $i++) { 
		for ($j=0, $j=count($res); $j<$len; $j++) { 
			if ($arr[$i] > $arr[$j]) {
				$tmp = $arr[$i];
				$arr[$i] = $res[$j];
				$res[$j] = $tmp;
			}
		}
	}
	return $arr;
}