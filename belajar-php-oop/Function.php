<?php 

require_once "data/Person.php";

$eko = New Person();
$eko->name = "Eko";
$eko->sayHello("Budi");

$joko = New Person();
$joko->name = "Joko";
$joko->sayHello(null);

$eko->info();
$joko->info();