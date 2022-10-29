#!/usr/bin/php
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

if ($argc < 2)
	return (0);
$arr = array();
$i = 1;
while ($i < count($argv))
{
	$str = trim(preg_replace("/\s+/", " ", $argv[$i]));
	$dell_space = ft_split($str);
	$j = 0;
	while ($j < count($dell_space))
	{
		$word = array_push($arr, $dell_space[$j]);
		$j++;
	}
	$i++;
}
sort($arr);
$i = 0;
while ($i < count($arr))
{
	echo ($arr[$i]."\n");
	$i++;
}

?>
