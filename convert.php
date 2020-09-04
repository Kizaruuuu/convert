<?php



function convertArray(array $arrA, $length)
{
    $arrB = [];
    for ($i = 0; $i < $length; $i++) {

        if ($length <= count($arrA)) {
            if ($i == 0) {
                $arrB[$i] = $arrA[$i] + $arrA[$i + 1];
            } elseif ($i == ($length - 1)) {
                $arrB[$i] = $arrA[$i - 1] + $arrA[$i];
            } else {
                $arrB[$i] = $arrA[$i - 1] + $arrA[$i] + $arrA[$i + 1];
            }
        } else {
            if ($i == 0) {
                $arrB[$i] = $arrA[$i] + $arrA[$i + 1];
            } elseif ( $i == (count($arrA) - 1)) {
                $arrB[$i] = $arrA[$i - 1] + $arrA[$i];
            } elseif ($i == count($arrA)) {
                $arrB[$i] = $arrA[$i - 1];
            } elseif ($i > count($arrA)) {
                $arrB[$i] = 0;
            } else {
                $arrB[$i] = $arrA[$i - 1] + $arrA[$i] + $arrA[$i + 1];
            }
        }
    }

    return $arrB;
}
echo implode(convertArray([4, 0, 1], 5), ', ');