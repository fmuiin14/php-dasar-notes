<?php 

$nama = "Miununun";

function namaNya()
{
    // $nama = "Bambang";
    global $nama;
    echo $nama . PHP_EOL;
}

namaNya();