<?php 

require_once "data/Person.php";

$eko = New Person("Eko", "Subang");
$eko->name = "Eko";
$eko->sayHello("Budi");

$joko = New Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$eko->info();
$joko->info();