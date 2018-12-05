<?php 

$res = my(7);
var_dump($res);

function getUgly($num){

	while ($num%2 == '0') {
		$num = $num/2;
	}
	while ($num%3 == '0') {
		$num = $num/3;
	}
	while ($num%5 == '0') {
		$num = $num/5;
	}

	if ($num == '1') {
		return 'yes';
	}else{
		return 'no';
	}
}

function my($key){

	$count = 0;
	while (1) {
		if ($count[$key]) {
			$count++;
		}
		if ($count) {
			return $count;
		}else{
			return 0;
		}
	}
}

?>