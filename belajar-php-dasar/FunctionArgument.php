<?php

function namaFunction($name) {
    echo "Halo bray $name" . PHP_EOL;
}

namaFunction("Wey");

function sum(int $one, int $two) 
{
    $total = $one + $two;
    echo "Total $one + $two = $total" . PHP_EOL;
}

sum(100,100);
sum("100","100");
sum(true,false);

function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1,2,3,4,5);