<?php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

function sumEachRow(array $matrix) {
    $sums = [];
    
    foreach ($matrix as $row) {
        $sums[] = array_sum($row);
    }
    
    return $sums;
}

print_r(sumEachRow($matrix));

?>