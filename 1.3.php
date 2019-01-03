<?php  

function num($nums){

	while ($nums%2 == 0) {
		$nums = $nums / 2;
	}
	while ($nums%3 == 0) {
		$nums = $nums / 3;
	}
	
	while ($nums%5 == 0) {
		$nums = $nums / 5;
	}

	if ($nums == 1) {
		return 'TRUE';
	}else{
		return 'FALSE';
	}
}
var_dump(num(26));