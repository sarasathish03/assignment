<?php

$array = [1, 2, 2, 3, 4, 4, 5];

function removeDuplicates(array $array) {
    $result = [];
    
    foreach ($array as $value) {
        if (!in_array($value, $result)) {
            $result[] = $value;
        }
    }
    
    return $result;
}

print_r(removeDuplicates($array));

?>