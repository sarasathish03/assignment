<?php

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [4, 5, 6, 7, 8];

function findIntersection(array $arr1, array $arr2) {
    return array_values(array_intersect($arr1, $arr2));
}

print_r(findIntersection($arr1, $arr2));

?>