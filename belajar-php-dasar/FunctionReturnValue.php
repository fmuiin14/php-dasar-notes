<?php 

function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$result = sum(10,20);
var_dump($result);

function getFinalValue(int $value)
{
    if($value >= 80) {
        return "A";
    } elseif($value>=70) {
        return "B";
    } elseif($value>=60) {
        return "C";
    } elseif($value>=50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups " . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);