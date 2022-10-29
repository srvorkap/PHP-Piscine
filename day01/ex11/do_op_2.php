#!/usr/bin/php
<?php

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	return (0);
}

$remove_spaces	= str_replace(" ", "", $argv[1]);
$first	= intval($remove_spaces);
$second	= substr(substr($remove_spaces, strlen((string)$first)), 0, 1);
$third	= substr(substr($remove_spaces, strlen((string)$first)), 1);

if (!is_numeric($first) || !is_numeric($third))
{
	echo "Syntax Error\n";
	return (0);
}

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
else
{
	echo "Syntax Error\n";
	return (0);
}

echo "$result\n";

?>
