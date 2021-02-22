<?php 

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Muiin", "strtoupper");
sayHello("Muiin", "strtolower");
sayHello("Eko", function(string $name): string {
    return strtoupper($name);
});

// error, perlu php 7.4
// sayHello("Eko", fn($name) => strtoupper($name));