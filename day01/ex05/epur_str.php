#!/usr/bin/php
<?php

if ($argc != 2)
	return (0);
$argument1 = preg_replace("/\s+/", " ", $argv[1]);
$argument2 = trim($argument1);
echo ("$argument2\n");

?>
