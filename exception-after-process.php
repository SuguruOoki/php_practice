<?php

class Sample {

    public function __construct() {

    }

    public function sample() {

        try {
            throw new Exception();
            // if exception caused true not return 
            return true;
        } catch (Exception $e) {
            echo $e;
            // write return -> return false exception all
            // return false;
        }
    }
}

$sample = new Sample();
var_dump($sample->sample());
