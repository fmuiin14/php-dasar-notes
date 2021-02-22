<?php

$nilai = 70;
$absen = 100;
$nama = "Muiin";

if($nilai >= 75 && $absen >= 75) {
    echo "Selamat $nama lulus ya" . PHP_EOL;
} else if ($nilai >= 70 && $absen == 100) {
    echo "Testing" . PHP_EOL;
} else {
    echo "Last";
}