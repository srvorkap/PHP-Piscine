#!/usr/bin/php
<?php

while (42)
{
    echo "Enter a number: ";
    $stdin = fopen("php://stdin","r");
    $line = (trim(fgets(STDIN)));
	if (feof(STDIN))
	{
		echo "\n";
		return (0);
	}
	if (is_numeric($line))
	{
		if ($line % 2 == 0)
			echo "The number $line is even\n";
		else
			echo "The number $line is odd\n";
	}
    else
        echo "'$line' is not a number\n";
}

?>
