<?php



function convertArray(array $arrA, $count)
{
    $arrB = [];
    for ($i = 0; $i < $count; $i++) {
        if ($i == 0) {
            $arrB[$i] = $arrA[$i] + $arrA[$i + 1];
        } elseif ($i == ($count - 1)) {
            $arrB[$i] = $arrA[$i - 1] + $arrA[$i];
        } else {
            $arrB[$i] = $arrA[$i - 1] + $arrA[$i] + $arrA[$i + 1];
        }
    }

    return $arrB;
}
echo implode(convertArray([4, 0, 1, -2, 3], 5), ', ');