<?php

$arr = [10, 20, 5, 40, 25];

function secondLargest(array $arr) {
    if (count($arr) < 2) {
        throw new Exception("Array must have at least two elements.");
    }

    $largest = $secondLargest = 0;

    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num > $secondLargest && $num < $largest) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}

echo secondLargest($arr);

?>