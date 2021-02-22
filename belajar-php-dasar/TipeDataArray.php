<?php

$values = array(10, 9,8, 7.5, "Nama nya");
var_dump($values);

$names = ["Muhammad", "Karim", "Haidar"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Additional";
var_dump($names);

var_dump(count($names));


$eko = array(
    "id" => 1,
    "name" => "Patul Miun",
    "age" => 30,
);

var_dump($eko);
var_dump($eko["name"]);

$budi = [
    "id" => "13",
    "name" => "Budi Nugraha",
    "age" => "35",
    "address" => [
        "city" => "Jakarta",
        "country" => "Condet"
    ]
];

var_dump($budi);
var_dump($budi["address"]["city"]);