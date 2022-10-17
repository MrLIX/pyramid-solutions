<?php

/**
 * Bottom-Up
 * @param array $array
 * @return int
 */
function pyramid(array $array): int
{
    $length = count($array);
    for ($i = $length - 2; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            $first = $array[$i + 1][$j];
            $second = $array[$i + 1][$j + 1];
            if ($first > $second)
                $array[$i][$j] += $array[$i + 1][$j];
            else
                $array[$i][$j] += $array[$i + 1][$j + 1];
        }
    }
    return $array[0][0];
}
// 1-Пример
const FIRST_TRIANGLE = [
    [4, 0, 0],
    [9, 2, 0],
    [3, 7, 8]
];

// 2-Пример
const SECOND_TRIANGLE = [
    [6, 0, 0, 0, 0, 0, 0],
    [2, 5, 0, 0, 0, 0, 0],
    [3, 7, 8, 0, 0, 0, 0],
    [3, 1, 5, 4, 0, 0, 0],
    [3, 1, 3, 1, 3, 0, 0],
    [2, 2, 2, 2, 2, 2, 0],
    [5, 6, 4, 5, 6, 4, 3]
];
// 3-Пример
const THIRD_TRIANGLE = [
    [3, 0, 0, 0],
    [7, 4, 0, 0],
    [2, 4, 6, 0],
    [8, 5, 9, 3]
];

$result = pyramid(FIRST_TRIANGLE);
//$result = pyramid(SECOND_TRIANGLE);
//$result = pyramid(THIRD_TRIANGLE);
echo $result;