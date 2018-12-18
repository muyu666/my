<?php 

echo NumberOf1(30);
function NumberOf1($n){

	$count = 0;
	for ($i=0; $i < 32; $i++) { 
		if (($n >> $i) & 1) {
			$count++;
		}
	}
	return $count;
}

?>