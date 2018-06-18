<?php
$fp = fopen(__DIR__ . '/uploaded.csv', 'r');

while (true) {
    $line = fgetcsv($fp);
    if ($line === false) {
        break;
    }

    var_dump($line);
}