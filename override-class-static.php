<?php

class ParentSample
{
    public function __construct()
    {
        $this->sample = 'sample';
    }

    public function sample()
    {
        echo 'sample';
    }
}

class ChildSample
{
    public function __construct()
    {
        $this->sample = 'sample2';
    }

    public static function sample()
    {
        echo 'sample child';
    }
}

$sample = new ChildSample();
$sample->sample();
