<?php 

$sayHello = function(string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Muiin");
$sayHello("Bud");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

$filterFunction = function(string $name): string {
return strtoupper($name);
};

sayGoodbye("Eko", $filterFunction);

$namaDepan = "Fathul";
$namaBelakang = "Muiin";

$sayHelloMuiin = function() use ($namaDepan, $namaBelakang) {
    echo "Hello $namaDepan $namaBelakang" . PHP_EOL;
};

$sayHelloMuiin();