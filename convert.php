<?php

function convertArray(array $arrA, $length)
{
    $arrB = [];
    for ($i = 0; $i < $length; $i++) {
        $arrB[$i] = checkKey($i - 1, $arrA) + checkKey($i , $arrA) + checkKey($i + 1, $arrA);
    }

    return $arrB;
}

function checkKey($key, array $array)
{
    if(array_key_exists($key, $array)) {
        return $array[$key];
    }

    return 0;
}

echo implode(convertArray([1, 2, 3, 4, 5], 5), ', ');