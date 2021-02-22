<?php

$nama = "Fathul Muiin";

echo "Name : " . $nama . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;
// echo $nama;
// echo "\n";

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$nem = "Muiin";
echo $nem[0] . PHP_EOL;
echo $nem[4] . PHP_EOL;
echo $nem[2] . PHP_EOL;

echo "Hello $nem, Selamat Belajar PHP" . PHP_EOL;

$var = "var";
echo "This is {$var}s" . PHP_EOL;