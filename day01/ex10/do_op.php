#!/usr/bin/php
<?php

if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return (0);
}

$first	= trim($argv[1], " \t");
$second	= trim($argv[2], " \t");
$third	= trim($argv[3], " \t");
if ($second == '+')
	$result = $first + $third;
else if ($second == '-')
	$result = $first - $third;
else if ($second == '*')
	$result = $first * $third;
else if ($second == '/')
	$result = $first / $third;
else if ($second == '%')
	$result = $first % $third;

echo "$result\n";

?>
