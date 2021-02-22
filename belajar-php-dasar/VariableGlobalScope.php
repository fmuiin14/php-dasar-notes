<?php 

$name = "Bibiw";

function sayName()
{
    echo "Hello {$GLOBALS["name"]}" . PHP_EOL;
}

sayName();