<?php

function ifSample($sample) {
    if ($sample) {
        echo 'true' . "\n";
    } else {
        echo 'false' . "\n";
    }
}

$sample = '';

ifSample($sample);

$sample = null;

ifSample($sample);

$sample = ' ';

ifSample($sample);

$sample = 0;

ifSample($sample);
$sample = '0';

ifSample($sample);
