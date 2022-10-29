#!/usr/bin/php
<?php

if ($argc < 2)
	return (0);
$str = trim(preg_replace("/\s+/i", " ", $argv[1]));
$array = explode(" ", $str);
$array_len = count($array);
$i = 1;
while ($i < $array_len)
{
	echo ($array[$i]." ");
	$i++;
}
echo ($array[0]."\n");

?>
