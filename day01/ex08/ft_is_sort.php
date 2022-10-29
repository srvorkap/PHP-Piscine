<?php

function ft_is_sort($array)
{
        $sorted_array = $array;
        sort($sorted_array);
        if (array_diff_assoc($array, $sorted_array) == NULL)
			return (true);
		else
			return (false);
}

?>
