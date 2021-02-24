<?php 

$array = [
    "first_name" => "Fathul",
    "middle_name" => "Muiin",
    "last_name" => "Ramadhan"
];

$objek = (object)$array;

var_dump($objek);

echo $objek->first_name . PHP_EOL;
echo $objek->middle_name . PHP_EOL;
echo $objek->last_name . PHP_EOL;

$arrayLagi = (array)$objek;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Eko", "Subang");
var_dump($person);

$jadiArray = (array)$person;
var_dump($jadiArray);