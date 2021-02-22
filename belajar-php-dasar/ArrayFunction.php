<?php 

$data = [1,2,3,4,5,6,7,8,9,10];

// array function can work correctly in PHP 7.4 
// $dataResult = array_map(fn(int $value) => $value * 10, $data);
// var_dump($dataResult);

// var_dump(rsort($data));
rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "nama" => "Miuun",
    "no" => "089679590922",
    "kampus" => "STT NF",
    "nim" => "01102130144"
];

var_dump(array_values($person));
var_dump(array_keys($person));