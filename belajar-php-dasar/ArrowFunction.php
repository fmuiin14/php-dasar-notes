<?php 

$first = "Patul";
$last = "Muiin";

$anonimus = function() use($first, $last): string {
    return "Hello $first $last" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $first $last" . PHP_EOL;

echo $anonimus();
echo $arrowFunction();