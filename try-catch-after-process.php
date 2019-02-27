<?php

function sample() {
    try {
        echo 'sample';
        throw new Exception('sample');
    } catch (Exception $e) {
        var_dump($e);
    }
    echo 'after';
}

sample();
