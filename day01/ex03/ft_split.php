<?php

function ft_split($str)
{
	$array;
	$filtered_array;
	$array = explode(" ", $str);
	$filtered_array = array_filter($array);
	sort($filtered_array);
	return ($filtered_array);
}

?>
