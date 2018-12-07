<?php 

$num = ['56','4','84','31'];

$res = my($num);
echo $res;

function my($str){

	$len = count($str);
	for ($i=0; $i < $len; $i++) { 
		for ($j=$i+1; $j < $len; $j++) { 
			if (intval($str[$i].''.$str[$j]) > intval($str[$j].''.$str[$i])) {
				$tmp = $str[$i];
				$str[$i] = $str[$j];
				$str[$j] = $tmp;
			}
		}
	}
	$res = implode('',$str);
	return $res;
}

 ?>