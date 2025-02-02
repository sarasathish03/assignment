<?php

$arr1 = [1, 3, 5, 7];
$arr2 = [2, 4, 6, 8];

function mergeSortedArrays(array $arr1, array $arr2) {
    $merged = array_merge($arr1, $arr2);
    sort($merged);
    return $merged;
}

print_r(mergeSortedArrays($arr1, $arr2));
?>