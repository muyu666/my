<?php 

// echo 123;exit;
$english = "I think it is very import";
$info = FirstNotREpeatingChar($english);
var_dump($info);

function FirstNotREpeatingChar($str){

	$arr = [];
	for ($i=0,$i<$len;$i<$str;$i++) { 
		if ($str[$arr[$i]] == 0) {
			$arr[$i] == 1; 
		}else{
			$arr[$i] == false;
		}
	}

	foreach ($arr as $key => $value) {
		$arr[$i] == $key;
	}
	return $str[$i];
}



?>