<?php
$csv = new SplFileObject(__DIR__ . '/uploaded.csv');
$csv->setFlags(SplFileObject::READ_CSV);

foreach ($csv as $line) {
    var_dump($line);
}
