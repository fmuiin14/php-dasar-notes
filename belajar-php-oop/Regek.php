<?php 

$matches = [];

$result = preg_match_all("/karim|bambang|kunyu/i", "Muhammad Karim Haidar", $matches);

var_dump($result);
var_dump($matches);

$kasar = preg_replace("/anjing|bangsat/i", "***", "Dasar lu anjing, bangsat!");

var_dump($kasar);

$ribetsplit = preg_split("/[\s, -]/", "Patul Muiin Ganteng, Ploglammel, Jaman-New");
var_dump($ribetsplit);