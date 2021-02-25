<?php 

$dateTime = new DateTime();
$dateTime->setDate(1996, 4, 8);
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusMonth = new DateInterval("P1M");
$minusMonth->invert = true;
$dateTime->add($minusMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);

$now->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($now);

$setring = $now->format("Y-m-d h:i:s");
echo "Waktu saat ini $setring" . PHP_EOL;

$dates = DateTime::createFromFormat("Y-m-d H:i:s", "2020-02-25 09:44:10", new DateTimeZone("Asia/Jakarta"));

if($dates) {
    var_dump($dates);
} else {
    echo "Format Salah" . PHP_EOL;
}


