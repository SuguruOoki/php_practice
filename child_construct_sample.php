<?php

require 'parent_construct_sample.php';
class ChildSample extends ParentSample {
    // public $sample;

    public function __construct() {
        var_dump('child:', $this->sample);
   }
}

$sample = new ChildSample();
