<?php

$students = [
    ["name" => "Alice", "age" => 22],
    ["name" => "Bob", "age" => 20],
    ["name" => "Charlie", "age" => 25]
];

function sortByKey(array $array, string $key) {
    usort($array, function ($a, $b) use ($key) {
        return $a[$key] <=> $b[$key];
    });
    return $array;
}

print_r(sortByKey($students, "age"));

?>
