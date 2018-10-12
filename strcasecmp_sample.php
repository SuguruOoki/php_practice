<?php

function sample($image_contents, $actual_contents) {
    $sample = strcasecmp($image_contents, $actual_contents);
    if ($sample === 0) {
        echo 'Same';
    } else {
        echo 'Not Same';
    }
}

$image = 'invoice';
$actual = 'Invoice';

sample ($image, $actual);
