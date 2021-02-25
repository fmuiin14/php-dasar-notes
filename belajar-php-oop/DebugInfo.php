<?php 

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Elelele";
$student1->value = 100;
$student1->setSample("Sempel");

var_dump($student1);
$student1("Mimi", 1, "Momo", true);