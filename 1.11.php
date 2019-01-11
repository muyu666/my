<?php

$array = [0,1,2,3,4,5,6,7,8,9,10];
$sum = 10;
$res = FindNumbersWithSum($array, $sum) ;
var_dump($res);

function FindNumbersWithSum($array, $sum) 
{
	$arr = array();
	for ($i=0,$len=count($array); $i < $len; $i++) { 
		for ($j=0,$len=count($array); $j < $len; $j++) { 
			if($array[$i] + $array[$j] == 10 && $i != $j)
			{
				if(!in_array($array[$i], $arr))
				{
					$arr[] = $array[$i];
					$arr[] = $array[$j];
				}
			}
		}
	}
	// var_dump($arr);
	for ($i=0,$len=count($arr); $i < $len; $i=$i+2) { 
		for ($j=$i+2,$len=count($arr); $j < $len; $j=$j+2) { 
			if(intval($arr[$i] * $arr[$i+1]) > intval($arr[$j] * $arr[$j+1]))
			{
				$tmp = $arr[$i];
				$tmp1 = $arr[$i+1];
				$arr[$i] = $arr[$j];
				$arr[$i+1] = $arr[$j+1];
				$arr[$j] = $tmp;
				$arr[$j+1] = $tmp1;
			}
		}
	}
	// $res = implode(',', $arr);
	return $arr[0].','.$arr[1];
}

?>