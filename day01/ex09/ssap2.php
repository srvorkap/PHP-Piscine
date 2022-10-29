#!/usr/bin/php
<?php

$array = array_slice($argv, 1);
$words = [];
foreach ($array as $el)
    foreach (explode(' ', trim(preg_replace('/ +/', ' ', $el))) as $e)
        $words[] = $e;

usort($words, function ($a, $b) {
    $a = strtolower($a);
    $b = strtolower($b);
    $customOrder = str_split("abcdefghijklmnopqrstuvwxyz0123456789");
    $customOrder = array_flip($customOrder);
    $b = str_split($b);
    foreach (str_split($a) as $i => $char) {
        if ($char === $b[$i])
            continue;
        else if (!isset($customOrder[$char]) && !isset($customOrder[$b[$i]]))
            return strcmp($char, $b[$i]);
        else if (!isset($customOrder[$char]))
            return 1;
        else if (!isset($customOrder[$b[$i]]))
            return -1;
        else if ($customOrder[$char] === $customOrder[$b[$i]])
            return 0;
        else
            return ($customOrder[$char] > $customOrder[$b[$i]]) ? 1 : -1;
    }
    return 0;
});

foreach ($words as $word)
        echo "$word\n";
