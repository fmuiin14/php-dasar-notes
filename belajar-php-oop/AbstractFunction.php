<?php 

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Catty";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();