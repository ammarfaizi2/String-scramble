<?php

function scramble($str, $arr){
  	$pure = $str xor $str = str_split($str);
  	array_walk($arr, function ($q,$in) use (&$str, $pure) {
  		$str[$q] = $pure[$in];
  	});
	return implode($str,"");
}
