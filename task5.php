<?php


$data = [
    "name" => "John",
    "age" => 25,
    "address" => [
        "city" => "New York",
        "country" => "USA"
    ]
];

function convertToJson(array $data) {
    return json_encode($data); 
}

echo convertToJson($data);

?>