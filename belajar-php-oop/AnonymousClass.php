<?php 

interface HelloWorld {
    function sayHello(): void;
}


// class SampleHelloWorld implements HelloWorld {
//     public function sayHello(): void {
//         echo "Hello World" . PHP_EOL;
//     }
// }
// $helloWorld = new SampleHelloWorld();

$helloWorld = new class("Miuun") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void {
        echo "Hello $this->name World" . PHP_EOL;
    }
};

$helloWorld->sayHello();