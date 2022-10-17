<?php

/**
 * Рекурсия - Top to bottom
 * @param array $array
 * @param int $i - array index
 * @param int $j - array inner index
 * @param int $row - length of array
 * @return int
 * Time Complexity: O(2^N)
 */
function pyramid(array $array, int $i, int $j, int $row): int
{
    if ($j === $row) return 0;
    if ($i === $row - 1) return $array[$i][$j];
    $first = pyramid($array, $i + 1, $j, $row);
    $second = pyramid($array, $i + 1, $j + 1, $row);
    return $array[$i][$j] + max($first, $second);
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

$result = pyramid(FIRST_TRIANGLE,0,0,3);
//$result = pyramid(SECOND_TRIANGLE,0,0,7);
//$result = pyramid(THIRD_TRIANGLE,0,0,4);
echo $result;