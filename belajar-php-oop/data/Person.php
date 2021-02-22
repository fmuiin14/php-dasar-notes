<?php 

class Person 
{
    const AUTHOR = "Patul Miuun Chenel";
    // gatau si name kenapa error kalo pake ? atau deklarasi tipe data
    var string $name;
    // var ?string $address; -> kalau boleh null kasi ?
    var ?string $address = null;
    var string $country = "Dubai";

    function sayHello(?string $name) {
        if(is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "hi $name, my name is $this->name" . PHP_EOL;
        }
        // echo "Hello $name" . PHP_EOL;
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}