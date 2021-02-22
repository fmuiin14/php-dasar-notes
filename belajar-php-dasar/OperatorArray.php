<?php

$first = [
    "nama" => "Fathul Muiin"
];

$last = [
    "pekerjaan" => "Web Developer" 
];

// $full = $first + $last;
// var_dump($full);

$a = [
    "pekerjaan" => "Web Developer", 
    "nama" => "Fathul Muiin" 
];

$b = [
    "nama" => "Fathul Muiin", 
    "pekerjaan" => "Web Developer" 
];

var_dump($a === $b);