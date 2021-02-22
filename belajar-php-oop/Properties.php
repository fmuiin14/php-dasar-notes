<?php 

require_once "data/Person.php";

$person = New Person();
$person->name = "Miuun";
$person->address = "Depok";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
$person2->name = "Haidar";
$person2->address = "Jakarta";
// $person2->country = "Singapore";

echo "Nama : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;