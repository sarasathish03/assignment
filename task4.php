<?php

$array = [1, [2, 3], [4, [5, 6]]];

function flattenArray(array $array) {
    $result = [];
    
    foreach ($array as $element) {
        if (is_array($element)) {
            $result = array_merge($result, flattenArray($element));
        } else {
            $result[] = $element;
        }
    }
    
    return $result;
}

print_r(flattenArray($array));
?>