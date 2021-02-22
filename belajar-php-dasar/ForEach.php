<?php 

$names = ["Muhammad", "Karim", "Haidar"];

for($i=0; $i<count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach($names as $name) {
    echo "Data $name " . PHP_EOL;
}

$person = [
    "first_name" => "Muhammad",
    "middle_name" => "Karim",
    "last_name" => "Haidar"
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}